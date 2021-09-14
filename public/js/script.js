$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form').on('submit', function(e){
        e.preventDefault();
        $(this).find('.btn-modal-salvar').trigger('click');
    });
    $('form').find('input').on('keyup', function(e){
        if(e.keyCode == 13){
            $(this).find('.btn-modal-salvar').trigger('click');
        }
    });

    // Condifgurações
    var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 4000
    });

    // $('.select2').select2();

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
        let modal = $(save_target);
        modal.find('input, select').attr('readonly', true);
        modal.find('button').attr('disabled', true);

        $.ajax({
            url: save_route,
            type: "POST",
            data: new FormData($(save_target)[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                console.log(data);
                // Procuramos a div adcionada recentemente para removemos e fechamos o modal
                modal.find('input, select').attr('readonly', false);
                modal.find('button').attr('disabled', false);
                $(modal).parent().parent().parent().modal('hide');

                $(save_target).find('input[type="text"]').val('');

                if(update_table == 'S') if(data.table) $('table '+(save_target.replace('#','.'))).append(data.table); // Inserindo novos dados
                if(update_table == 'S') if(data.tb_up) $('table '+(save_target.replace('#','.'))).find('.tr-id-'+data.tb_id).html(data.tb_up); // Editando dados

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

        // Fazemos uma leitura dosa campos
        var data = '';
        $.each(dados, (key, value) => {
            $(target).find('[name="'+key+'"').val(value); // os campos name são iguais aos das colunas vidna do banco
            $(target).find('.'+key).val(value); // quando o campo name por motivos especiais for diferente, pega por class tambem

            $(target).find('._'+key).text(value); // qunado campo for texto
        });
    });
});