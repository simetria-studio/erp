$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Object.is = function(obj) {
        var r = (typeof obj) == 'object' ? true : false;
        return r;
    };

    $('.phone1').mask('(41) 9999-9999');
    $('.phone2').mask('(41) 99999-9999');

    $('[name="zip_code"]').mask('00000-000');
    $('[name="zip_code"]').on('keyup blur', function(){
        if($(this).val().length == 9){
            $.ajax({
                url: '/cep/'+$(this).val(),
                type: 'GET',
                success: (data) => {
                    $('[name="address"]').val(data.logradouro);
                    if(data.logradouro) $('[name="address"]').prop('readonly', true);
                    $('[name="address2"]').val(data.bairro);
                    if(data.bairro) $('[name="address2"]').prop('readonly', true);
                    $('[name="state"]').val(data.uf);
                    if(data.uf) $('[name="state"]').prop('readonly', true);
                    $('[name="city"]').val(data.localidade);
                    if(data.localidade) $('[name="city"]').prop('readonly', true);

                    $('[name="number"]').focus();
                }
            });
        }
    });

    $('.date-mask').mask('99/99/9999');
    $('.date-mask').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'DD/MM/YYYY',
            daysOfWeek: ['dom','seg','ter','qua','qui','sex','sab'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','outubro','Novembro','Dezembro'],
            applyLabel: 'Aplicar',
            cancelLabel: 'Cancelar'
        }
    });

    // $('form').on('submit', function(e){
    //     e.preventDefault();
    //     $(this).find('.btn-modal-salvar').trigger('click');
    // });
    // $('form').find('input').on('keyup', function(e){
    //     if(e.keyCode == 13){
    //         $(this).find('.btn-modal-salvar').trigger('click');
    //     }
    // });

    // Condifgurações
    var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 4000
    });

    $('.select2').select2();
    $(".table").DataTable({
        "responsive": false,
        "autoWidth": false,
        "language": {
            "url": '/plugin/datatables-language/pt-br.json',
        },
        'order': false
    });

    $(document).on('change', '.check-all', function(){
        var column = $(this).data('column');
        if($(this).is(":checked")){
            $(this).closest('table').find(column).each(function(){
                $(this).find('[type="checkbox"]').prop('checked', true);
            });
        }else{
            $(this).closest('table').find(column).each(function(){
                $(this).find('[type="checkbox"]').prop('checked', false);
            });
        }
    });

    // Função salva dados gerais modal
    $(document).on('click', '.btn-modal-salvar', function(){
        // Pegamos os dados do data
        let save_target = $(this).data('save_target');
        let save_route = $(this).data('save_route');
        let update_table = $(this).data('update_table');
        let table_tbody = $(this).data('tbody');
        let type = $(this).data('type');

        var form_data = $(save_target).serializeArray();
        var checkbox = $(save_target).find("input[type=checkbox]");
        $.each(checkbox, function(key, val) {
            form_data.push({name: $(this).attr('name'), value: $(this).is(':checked')});
        });

        // Por mais que tenha erro, limpamos para os outros que não tenha
        $(save_target).find('input').removeClass('is-invalid');
        $(save_target).find('.invalid-feedback').remove();

        // Pegamos o parente do id para adicionar um modelo de carregamento
        let modal = $(save_target);
        modal.find('input, select').attr('readonly', true);
        modal.find('button').attr('disabled', true);

        $.ajax({
            url: save_route,
            type: (type == 'PUT' ? 'PUT' : 'POST'),
            data: form_data,
            enctype: 'multipart/form-data',
            success: (data) => {
                // console.log(data);
                // Procuramos a div adcionada recentemente para removemos e fechamos o modal
                modal.find('input, select').attr('readonly', false);
                modal.find('button').attr('disabled', false);
                $(modal).parent().parent().parent().modal('hide');

                $(save_target).find('input[type="text"]').val('');

                if(update_table == 'S') if(data.table) $('table '+(table_tbody)).append(data.table); // Inserindo novos dados
                if(update_table == 'S') if(data.tb_up) $('table '+(table_tbody)).find('.tr-id-'+data.tb_id).html(data.tb_up); // Editando dados

                Toast.fire({
                    icon: 'success',
                    title: 'Os dados foram salvos com successo!'
                });
            },
            error: (err) => {
                // console.log(err);
                modal.find('input, select').attr('readonly', false);
                modal.find('button').attr('disabled', false);

                // Adicionamos os erros numa variavel
                let erro_tags = err.responseJSON.errors;
                // console.log(erro_tags);

                $.each(erro_tags, (key, value) => {
                    let tag = $(save_target).find('[name="'+key+'"]');
                    tag.addClass('is-invalid');

                    tag.parent().append('<div class="invalid-feedback">'+value[0]+'</div>');
                });

                if(err.responseJSON.msg_alert){
                    Swal.fire({
                        icon: err.responseJSON.icon_alert,
                        text: err.responseJSON.msg_alert,
                    });
                }
            }
        });
    });

    // Passar os dados nos campos paranão puxar um por e sim recueprar em json em um atributo
    $(document).on('click', '.btn-editar', function(){
        var target = $(this).data('target'); // qual modal ta sendo acessado
        var dados = $(this).data('dados'); // dados que serão passados aos campos

        if(!Object.is(dados)){
            console.log(JSON.parse(dados));
        }

        // Fazemos uma leitura dosa campos
        $.each(dados, (key, value) => {
            $(target).find('[name="'+key+'"').val(value); // os campos name são iguais aos das colunas vidna do banco
            $(target).find('.'+key).val(value); // quando o campo name por motivos especiais for diferente, pega por class tambem

            $(target).find('._'+key).text(value); // qunado campo for texto
        });
        
        $(target).find("input[type=checkbox]").each(function() {
            if($(this).val() == 'true'){
                $(this).prop('checked', true);
            }else{
                $(this).prop('checked', false);
            }
        });
        // $(target).find('select').trigger('change');
    });

    // Apagar
    $(document).on('click', '.btn-apagar', function(e) {
        var dados = $(this).data('dados');
        var route = $(this).data('route');
        var table_tbody = $(this).data('tbody');

        Swal.fire({
            icon: 'info',
            title: 'Apagar Item',
            text: 'Tem certeza que gostatia de apagar esse item?',
            showCancelButton: true,
            confirmButtonText: 'SIM',
            cancelButtonText: 'NÃO',
            showLoaderOnConfirm: true,
            preConfirm: (destroy) => {
                return $.ajax({
                            url: route,
                            type: 'DELETE',
                            data: dados
                        }).then((response) => {
                            console.log(response);
                            $('table '+table_tbody).find('.tr-id-'+response).remove();
                            Toast.fire({
                                icon: 'success',
                                title: 'Os dados foram salvos com successo!'
                            });
                            return response;
                        }).catch((error) => {
                            // console.log(error);
                            Swal.showValidationMessage(error.responseJSON);
                        });
            }
        });
    });

    // Opções do fornecedor
    $(document).on('change', '#type_person', function(){
        $('.document-number, .D-J, .D-F, .tax-regime-code, .ie-exempt, .municipal-registration, .R-G, .issuing-agency').addClass('d-none');
        switch($(this).val()){
            case 'J':
                $('.document-number').removeClass('d-none').find('.D-J').removeClass('d-none');
                $('.tax-regime-code').removeClass('d-none');
                $('.ie-exempt').removeClass('d-none');
                $('.municipal-registration').removeClass('d-none');
                $('#taxpayer').val('1');
            break;
            case 'F':
                $('.document-number').removeClass('d-none').find('.D-F').removeClass('d-none');
                $('.R-G').removeClass('d-none');
                $('.issuing-agency').removeClass('d-none');
                $('#taxpayer').val('9');
            break;
        }
    });
    // --------------------
    $(document).on('change', '#taxpayer', function() {
        $('.state-registration input').prop('disabled', false);
        $('.ie-exempt input').prop('checked', false);
        switch($(this).val()){
            case '2':
                $('.state-registration input').prop('disabled', true);
                $('.ie-exempt input').prop('checked', true);
            break;
        }
    });
    // --------------------
    $(document).on('change', '#ie_exempt_check', function() {
        $('.state-registration input').prop('disabled', false);
        if($(this).is(':checked')) {
            $('.state-registration input').prop('disabled', true);
        }
    });

    // Opções do produto
    $(document).on('change', '#product_type', function(){
        if($(this).val() == 'P') {
            $('.caracteristicas').removeClass('d-none');
            $('#estoque-tab-justify').parent().removeClass('d-none');
        }
        if($(this).val() == 'S') {
            $('.caracteristicas').addClass('d-none');
            $('#estoque-tab-justify').parent().addClass('d-none');
        }
    });
    $(document).on('change', '#sales_format', function(){
        if($(this).val() == 'S') {
            $('.caracteristicas').removeClass('d-none');
            $('#variacoes-tab-justify').parent().addClass('d-none');
        }
        if($(this).val() == 'CV') {
            $('.caracteristicas').addClass('d-none');
            $('#variacoes-tab-justify').parent().removeClass('d-none');
        }
    });
    $(document).on('click', '.btn-add-fornecedor', function() {
        var opt = $('#client_supplier option:selected');
        opt.remove();

        var dados = opt.data('dados');

        $('.fornecedores').append(
            '<div class="row">'+
                '<div class="col-12 col-md-6">'+
                    '<label for="providers">Codigo e Nome do Fornecedor</label>'+
                    '<input type="text" class="form-control" value="'+dados.id+'-'+dados.corporate_name+'" disabled>'+
                    '<input type="hidden" name="providers['+dados.id+'][provider_id]" value="'+dados.id+'">'+
                    '<input type="hidden" name="providers['+dados.id+'][provider_name]" value="'+dados.corporate_name+'">'+
                '</div>'+
                '<div class="col-12 col-md-4">'+
                    '<label for="providers">preço de Custo</label>'+
                    '<input type="text" name="providers['+dados.id+'][cost_price]" class="form-control">'+
                '</div>'+
                '<div class="col-12 col-md-2">'+
                    '<button type="button" class="btn btn-danger btn-remove-provider mt-4" data-dados=\''+JSON.stringify(dados)+'\'><i class="ri-close-fill"></i></button>'+
                '</div>'+
            '</div>'
        );
    });
    $(document).on('click', '.btn-remove-provider', function(){
        var dados = $(this).data('dados');
        $(this).closest('.row').remove();

        $('#client_supplier').append('<option value="'+dados.id+'" data-dados=\''+JSON.stringify(dados)+'\'>'+dados.id+' - '+dados.corporate_name+'</option>');
    });

    // Para adiconar contato no fornecedor ou cliente
    $(document).on('click', '.btn-add-contact', function(){
        var position = (parseInt($('.position').val()) || 0) + 1;
        $('.position').val(position);

        $('.contatos').append(
            '<div class="row">'+
                '<div class="form-group col-12 col-md-4">'+
                    '<label for="contact">Nome do Contato</label>'+
                    '<input type="text" name="contact['+position+'][contact_name]" class="form-control" placeholder="Nome do Contato">'+
                '</div>'+
                '<div class="form-group col-12 col-md-4">'+
                    '<label for="contact">Telefone</label>'+
                    '<input type="text" name="contact['+position+'][phone1]" class="form-control phone1" placeholder="Telefone">'+
                '</div>'+
                '<div class="form-group col-12 col-md-4">'+
                    '<label for="contact">Celular</label>'+
                    '<input type="text" name="contact['+position+'][phone2]" class="form-control phone2" placeholder="Celular">'+
                '</div>'+
                '<div class="form-group col-12 col-md-4">'+
                    '<label for="contact">E-Mail</label>'+
                    '<input type="text" name="contact['+position+'][contact_email]" class="form-control" placeholder="E-Mail">'+
                '</div>'+
            '</div>'
        );

        $('.phone1').mask('(41) 9999-9999');
        $('.phone2').mask('(41) 99999-9999');
    });
});