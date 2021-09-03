<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <title>Sistema - ERP</title>
        
        <link href="{{asset('plugin/bootstrap-4.6.0/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugin/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
        <link href="{{asset('theme/main.min.css')}}" rel="stylesheet">
    </head>

    <body>

        @yield('content')

        <script src="{{asset('plugin/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('plugin/bootstrap-4.6.0/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugin/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('theme/assets/scripts/main.min.js')}}"></script>
        <script src="{{asset('plugin/mask.jquery.js')}}"></script>
        <script src="{{asset('plugin/valida_cpf_cnpj.js')}}"></script>
        
        <script>
            $(document).ready(function(){
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
            });
        </script>
    </body>
</html>