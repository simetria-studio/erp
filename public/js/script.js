$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.textarea').summernote({
        height:300,
        minHeight: null,
        maxHeight: null,
        dialogsInBody: true,
        dialogsFade: false
    });

    $('.date-mask').daterangepicker({
        singleDatePicker: false,
        showDropdowns: true,
        locale: {
            format: 'DD/MM/YYYY',
            daysOfWeek: ['dom','seg','ter','qua','qui','sex','sab'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','outubro','Novembro','Dezembro'],
            applyLabel: 'Aplicar',
            cancelLabel: 'Cancelar'
        }
    });

    //color picker with addon
    $('.colorpicker2').colorpicker()

    $('.colorpicker2').on('colorpickerChange', function(event) {
        $('.colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $('[name="post_code"]').mask('00000-000');
    $('[name="number"]').mask('0000000000');
    $('[name="phone1"]').mask('(00) 0000-0000');
    $('[name="phone2"]').mask('(00) 00000-0000');

    var options = {
        onKeyPress: function (cpf, ev, el, op) {
            var masks = ['000.000.000-000', '00.000.000/0000-00'];
            $('[name="cpf_cnpj"]').mask((cpf.length > 14) ? masks[1] : masks[0], op);
        }
    }
    $('[name="cpf_cnpj"]').length > 11 ? $('[name="cpf_cnpj"]').mask('00.000.000/0000-00', options) : $('[name="cpf_cnpj"]').mask('000.000.000-00#', options);

    // Aciona a validação ao sair do input
    $('[name="cpf_cnpj"]').blur(function(){
        var thiss = $(this);
    
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();

        if(cpf_cnpj){
            // Testa a validação
            if ( valida_cpf_cnpj( cpf_cnpj ) ) {
    
            } else {
                Swal.fire({
                    icon: 'error',
                    text: 'CPF/CNPJ informado invalido!',
                }).then((result)=>{
                    // thiss.focus();
                });
            }
        }
    });

    // Busca dos estados
    $(function(){
        if($('[name="state"]')){
            $.ajax({
                url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/',
                type: 'GET',
                success: (data) => {
                    // console.log(data);
                    for(var i=0; data.length>i; i++){
                        $('[name="state"]').append('<option value="'+data[i].sigla+'" data-sigla_id="'+data[i].id+'">'+data[i].sigla+' - '+data[i].nome+'</option>');
                    }
                }
            });
        }
    });

    // Busca das cidades/municipios
    $(document).on('change', '[name="state"]', function(){
        let sigla_id = $(this).find(':selected').data('sigla_id');
        let select = $(this).parent().parent().find('select[name="city"]');

        $.ajax({
            url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+sigla_id+'/municipios',
            type: 'GET',
            success: (data) => {
                // console.log(data);
                select.empty();
                select.append('<option value="">::Selecione uma Opção::</option>');
                if(select.is('.entrega')){
                    select.append('<option value="Toda Região">Toda Região</option>');
                }

                for(var i=0; data.length>i; i++){
                    select.append('<option value="'+data[i].nome+'">'+data[i].nome+'</option>');
                }
            }
        });
    });

    $('[name="post_code"]').on('keyup blur', function(){
        $(this).parent().parent().find('input, select').attr('readonly', false);
        $(this).parent().parent().find('input, select').trigger('change');

        if($(this).val().length == 9){
            $('.loadCep').removeClass('d-none');
            $.ajax({
                url: '/cep/'+$(this).val(),
                type: 'GET',
                success: (data) => {
                    $('[name="address"]').val(data.logradouro);
                    if(data.logradouro) $('[name="address"]').prop('readonly', true);
                    $('[name="address2"]').val(data.bairro);
                    if(data.bairro) $('[name="address2"]').prop('readonly', true);
                    $('[name="state"]').val(data.uf);
                    if(data.uf) {
                        $('[name="state"]').attr('readonly', true);
                        $('[name="state"]').trigger('change');
                    }
                    setTimeout(() => {
                        $('[name="city"]').val(data.localidade);
                        if(data.localidade) {
                            $('[name="city"]').attr('readonly', true);
                            $('[name="city"]').trigger('change');
                        }
                    }, 800);

                    $('[name="number"]').focus();
                    $('.loadCep').addClass('d-none');
                }
            });
        }
    });

    // Nomes das Imagens nos inputs
    $('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });

    // Função de busca da categorias
    function buscaCategoria(data){
        return $.ajax({
            url: './pesquisa_categoria',
            type: 'POST',
            data: data,
            async: !1,
        });
    }

    $('form').on('submit', function(e){
        e.preventDefault();
        $(this).find('.btn-salvar').trigger('click');
    });
    $('form').fin('input').on('keyup', function(e){
        if(e.keyCode == 13){
            $(this).find('.btn-salvar').trigger('click');
        }
    });

    // Condifgurações
    var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 4000
    });

    $('.select2').select2();

    // Limpa toda a area do modal novo
    $(document).on('click', '[data-toggle="modal"]', function() {
        $('.modal-content').find('.overlay').remove();
    });
    // Função salva dados gerais modal
    $(document).on('click', '.btn-modal-salvar', function(){
        // Pegamos os dados do data
        let save_target = $(this).data('save_target');
        let save_route = $(this).data('save_route');
        let update_table = $(this).data('update_table');
        let table_trash = $(this).data('trash');

        // Por mais que tenha erro, limpamos para os outros que não tenha
        $(save_target).find('input').removeClass('is-invalid');
        $(save_target).find('.invalid-feedback').remove();

        // Pegamos o parente do id para adicionar um modelo de carregamento
        let modal = $(save_target).parent();
        if(modal.is('.modal-content')) modal.append('<div class="overlay d-flex justify-content-center align-items-center"><i class="fas fa-2x fa-sync fa-spin"></i></div>');

        $.ajax({
            url: save_route,
            type: "POST",
            data: new FormData($(save_target)[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                // console.log(data);
                // Procuramos a div adcionada recentemente para removemos e fechamos o modal
                $(modal).find('.overlay').remove();
                $(modal).parent().parent().modal('hide');

                $(save_target).find('input[type="text"]').val('');
                $(save_target).find('input, select').attr('readonly', false);

                if(update_table == 'S') if(data.table) $('table tbody').append(data.table); // Inserindo novos dados
                if(update_table == 'S') if(data.tb_up) $('table tbody').find('.tr-id-'+data.tb_id).html(data.tb_up); // Editando dados

                if(table_trash == 'S'){ // Somente quando for apagar
                    if(data.tb_trash) $('table tbody').find('.tr-id-'+data.tb_trash).remove();

                    Toast.fire({
                        icon: 'success',
                        title: 'Os dados foram excluidos com successo!'
                    });
                }else{
                    Toast.fire({
                        icon: 'success',
                        title: 'Os dados foram salvos com successo!'
                    });
                }
            },
            error: (err) => {
                // console.log(err);
                $(modal).find('.overlay').remove();

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
        var images = $(this).data('images'); // dados que serão passados aos campos

        // Fazemos uma leitura dosa campos
        var data = '';
        $.each(dados, (key, value) => {
            $(target).find('[name="'+key+'"').val(value); // os campos name são iguais aos das colunas vidna do banco
            $(target).find('.'+key).val(value); // quando o campo name por motivos especiais for diferente, pega por class tambem

            $(target).find('._'+key).text(value); // qunado campo for texto
        });
    });

    // Categoria principal em Produtos
    $(document).on('change', '.main_category', function(){
        let modal_form = $(this).parent().parent().parent(); // pegamos o parent dos this, para que não tenha que repetir no editar produto
        modal_form.find('.sub_category').empty(); // limpa o subcategory para não dar append
        
        if($(this).val()){
            var data = buscaCategoria({parent_id: $(this).val()}); // uma função especifica que busca categorias
            modal_form.find('.sub_category').parent().find('div').removeClass('d-none'); // Removendo a classe do botão de nova sub categoria
            modal_form.find('.main_category').parent().find('div').addClass('d-none'); // adicionado a classe do botão nova categoria principal

            $('#postProductNovaCategoria').find('input[name="parent_id"]').val($(this).val()); // quando selelcionado passa o id para o parent_id quando nova sub categoria

            // Lendo os dados da nova sub categoria
            $.each(data.responseJSON, (key, value) => {
                modal_form.find('.sub_category').append('<option value="'+value.id+'">'+value.name+'</option>');
            });
        }else{ // se não tier preenchido vem para ca
            modal_form.find('.sub_category').parent().find('div').addClass('d-none');
            modal_form.find('.main_category').parent().find('div').removeClass('d-none');

            modal_form.find('.sub_category').append('<option value="" data-new_category="parent_id"> - Nova Sub Categoria - </option>');

            $('#postProductNovaCategoria').find('input[name="parent_id"]').val("");
        }
    });

    // Apagar a Categoria -- especifico categoria
    $(document).on('click', '.btn-excluir-categoria', function(){ // Verificamos os dados passados
        var target = $(this).data('target');
        var dados = $(this).data('dados');

        $(target).find('.modal-title').html('Excluir Categoria <strong>"'+dados.name+'"</strong>'); // Passamos o titulo da categoria
        $(target).find('[name="id"]').val(dados.id); // o id da categoria caso for ser excluida

        $.ajax({ // Busca de produtos que estejam vinculados a categoria ou subcategorias vinculados a categoria
            url: '/admin/cadastro/pesquisa_categoria_produto',
            type: 'POST',
            data: {id: dados.id},
            success: (data)=>{
                // console.log(data);
                $(target).find('.modal-body').empty();

                // Verificando se é produto ou subcategoria vinculada
                if(data.tipo == 'produto'){
                    if(data.dados.length > 0){
                        $(target).find('.modal-footer').find('button').eq(1).addClass('d-none');
                        $(target).find('.modal-body').append('<p>Essa categoria não pode ser excluida porque possui <strong>'+data.dados.length+'</strong> Produtos vinculados!</p>');
                        $(target).find('.modal-body').append('<p>Inative os Produtos vinculados ou altere a Categoria vinculado ao Produto para excluir!</p>');
                    }else{
                        $(target).find('.modal-footer').find('button').eq(1).removeClass('d-none');
                        $(target).find('.modal-body').append('<p>Tem certeza que deseja excluir essa categoria?</p>');
                    }
                }else if(data.tipo == 'categoria'){
                    if(data.dados.length > 0){
                        $(target).find('.modal-footer').find('button').eq(1).addClass('d-none');
                        $(target).find('.modal-body').append('<p>Essa categoria não pode ser excluida porque possui <strong>'+data.dados.length+'</strong> Sub Categorias vinculados!</p>');
                        $(target).find('.modal-body').append('<p>Exclua as Sub Categorias vinculadas para excluir a Principal!</p>');
                    }else{
                        $(target).find('.modal-footer').find('button').eq(1).removeClass('d-none');
                        $(target).find('.modal-body').append('<p>Tem certeza que deseja excluir essa categoria?</p>');
                    }
                }
            }
        });
    });
    // Fazendo a exclusão da categoria
    $(document).on('click', '.btn-confirma-exclusao-categoria', function(){
        let modal = $('#postExcluirCategoria').parent();
        if(modal.is('.modal-content')) modal.append('<div class="overlay d-flex justify-content-center align-items-center"><i class="fas fa-2x fa-sync fa-spin"></i></div>');
        
        $.ajax({ // Excluir categoria
            url: 'excluir_categoria',
            type: 'POST',
            data: $('#postExcluirCategoria').serialize(),
            success: (data)=>{
                $(modal).find('.overlay').remove();
                $(modal).parent().parent().modal('hide');

                $('.tr-id-'+data.category_id).remove();

                Toast.fire({
                    icon: 'success',
                    title: 'Os dados foram apagados com successo!'
                });
            },
            error: (err)=>{
                $(modal).find('.overlay').remove();
            }
        });
    });

    // Inativar o produto
    $(document).on('click', '.btn-excluir-produto', function(){
        var target = $(this).data('target');
        var dados = $(this).data('dados');

        $(target).find('.product-name').text(dados.name);
        $(target).find('[name="product_id"]').val(dados.id);
    });
    $(document).on('click', '.btn-confirma-exclusao-produto', function(){
        let modal = $('#postProductExcluirProduto').parent();
        if(modal.is('.modal-content')) modal.append('<div class="overlay d-flex justify-content-center align-items-center"><i class="fas fa-2x fa-sync fa-spin"></i></div>');

        $.ajax({
            url: 'inativar_produto',
            type: 'POST',
            data: $('#postProductExcluirProduto').serialize(),
            success: (data)=>{
                $(modal).find('.overlay').remove();
                $(modal).parent().parent().modal('hide');

                $('.tr-id-'+data.product_id).remove();

                Toast.fire({
                    icon: 'success',
                    title: 'Os dados foram apagados com successo!'
                });
            },
            error: (err)=>{
                $(modal).find('.overlay').remove();
            }
        });
    });

    // Trocar entre categoria ou produto
    $(document).on('click', '[name="product_category"]', function(){
        $('#product_check_form, #category_check_form, #main_category_check_form, #sub_category_check_form').addClass('d-none');

        if($(this).val() == 'product') $('#product_check_form').removeClass('d-none');
        if($(this).val() == 'category') $('#category_check_form').removeClass('d-none');
    });
    // Trocar entre categoria principal ou sub
    $(document).on('click', '[name="categories"]', function(){
        $('#main_category_check_form, #sub_category_check_form').addClass('d-none');

        if($(this).val() == 'main_category') $('#main_category_check_form').removeClass('d-none');
        if($(this).val() == 'sub_category') $('#sub_category_check_form').removeClass('d-none');
    });

    // Trocar entre Imagem e cor
    $(document).on('click', '[name="attribute_check"]', function(){
        var thisKey = $(this).parent().parent().parent().parent();
        thisKey.find('.imagem_check_form').addClass('d-none');
        thisKey.find('.cor_check_form').addClass('d-none');

        if($(this).val() == 'image') thisKey.find('.imagem_check_form').removeClass('d-none');
        if($(this).val() == 'color') thisKey.find('.cor_check_form').removeClass('d-none');
    });

    // Especifico produto quando ouver tempo de preparo
    $(document).on('click', '.has_preparation', function(){
        if($(this).prop('checked')){
            $(this).parent().parent().parent().find('.preparation_time').removeClass('d-none');
            $(this).parent().find('input[name="has_preparation"]').val('S');
        }else{
            $(this).parent().parent().parent().find('.preparation_time').addClass('d-none');
            $(this).parent().find('input[name="has_preparation"]').val('N');
        }
    });

    // Verificando se o produto é de variação ou não
    $(document).on('change', '[name="product_type"]', function(){
        var this_form = $(this).closest('form');
        if($(this).val() == 'simples'){
            this_form.find('.atributo-tab').addClass('d-none');
        }else if($(this).val() == 'variacoes'){
            this_form.find('.atributo-tab').removeClass('d-none');
        }
    });
});