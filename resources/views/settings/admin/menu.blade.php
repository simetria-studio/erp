@extends('layouts.painel')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Registro de Menus</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="nav nav-pills mb-3 nav-fill" id="pills-menu" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-main_access-tab-fill" data-toggle="pill" href="#pills-main_access-fill" role="tab" aria-controls="pills-main_access" aria-selected="false">Acesso Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-modulo-tab-fill" data-toggle="pill" href="#pills-modulo-fill" role="tab" aria-controls="pills-modulo" aria-selected="false">Modulo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-programa-tab-fill" data-toggle="pill" href="#pills-programa-fill" role="tab" aria-controls="pills-programa" aria-selected="true">Progama</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade active show" id="pills-main_access-fill" role="tabpanel" aria-labelledby="pills-main_access-tab-fill">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoAcessoPrincipal"><i class="ri-add-line"></i> Novo Acesso Principal</button>
                                        </div>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-light">#</th>
                                                        <th class="text-light">Nome do Acesso Principal</th>
                                                        <th class="text-light">Rota do Acesso Principal</th>
                                                        <th class="text-light">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="MenuPrincipal">
                                                    @foreach ($main_access as $mainaccess)
                                                        <tr class="tr-id-{{$mainaccess->id}}">
                                                            <td class="text-light">#{{$mainaccess->id}}</td>
                                                            <td class="text-light">{{$mainaccess->menu_name}}</td>
                                                            <td class="text-light">{{$mainaccess->menu_route}}</td>
                                                            <td class="text-light">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-danger btn-apagar" data-tbody=".MenuPrincipal" data-dados="{{json_encode(['id' => $mainaccess->id, 'menu_create' => 'main_access'])}}" data-route="{{route('setting.admin.menu')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                                    <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarMenuPrincipal" data-dados="{{json_encode($mainaccess)}}"><i class="ri-edit-box-line"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-modulo-fill" role="tabpanel" aria-labelledby="pills-modulo-tab-fill">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoModulo"><i class="ri-add-line"></i> Novo Modulo</button>
                                        </div>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-light">#</th>
                                                        <th class="text-light">Nome do Acesso Principal</th>
                                                        <th class="text-light">Nome do Modulo</th>
                                                        <th class="text-light">Rota do Modulo</th>
                                                        <th class="text-light">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="Modulo">
                                                    @foreach ($modules as $module)
                                                        <tr class="tr-id-{{$module->id}}">
                                                            <td class="text-light">#{{$module->id}}</td>
                                                            <td class="text-light">{{$module->mainAccess->menu_name}}</td>
                                                            <td class="text-light">{{$module->module_name}}</td>
                                                            <td class="text-light">{{$module->module_route}}</td>
                                                            <td class="text-light">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Modulo" data-dados="{{json_encode(['id' => $module->id, 'menu_create' => 'module'])}}" data-route="{{route('setting.admin.menu')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                                    <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarModulo" data-dados="{{json_encode($module)}}"><i class="ri-edit-box-line"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-programa-fill" role="tabpanel" aria-labelledby="pills-programa-tab-fill">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoPrograma"><i class="ri-add-line"></i> Novo Programa</button>
                                        </div>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-light">#</th>
                                                        <th class="text-light">Nome do Acesso Principal</th>
                                                        <th class="text-light">Nome do Modulo</th>
                                                        <th class="text-light">Nome do Programa</th>
                                                        <th class="text-light">Nome da Função</th>
                                                        <th class="text-light">Rota do Programa</th>
                                                        <th class="text-light">Nome da Rota</th>
                                                        <th class="text-light">Nome do Controller</th>
                                                        <th class="text-light">Metodos</th>
                                                        <th class="text-light">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="Programa">
                                                    @foreach ($programs as $program)
                                                        <tr class="tr-id-{{$program->id}}">
                                                            <td class="text-light">#{{$program->id}}</td>
                                                            <td class="text-light">{{$program->mainAccess->menu_name}}</td>
                                                            <td class="text-light">{{$program->module->module_name}}</td>
                                                            <td class="text-light">{{$program->program_name}}</td>
                                                            <td class="text-light">
                                                                <span><b>Get:</b> {{$program->method_get == 'true' ? 'view_'.$program->function_name : ''}}</span><br>
                                                                <span><b>Post:</b> {{$program->method_post == 'true' ? 'store_'.$program->function_name : ''}}</span><br>
                                                                <span><b>Delete:</b> {{$program->method_delete == 'true' ? 'destroy_'.$program->function_name : ''}}</span><br>
                                                            </td>
                                                            <td class="text-light">{{$program->program_route}}</td>
                                                            <td class="text-light">{{$program->route_name}}</td>
                                                            <td class="text-light">{{$program->controller_name}}</td>
                                                            <td class="text-light">
                                                                <span><b>Get:</b> {{$program->method_get == 'true' ? 'SIM' : 'NÃO'}}</span><br>
                                                                <span><b>Post:</b> {{$program->method_post == 'true' ? 'SIM' : 'NÃO'}}</span><br>
                                                                <span><b>Delete:</b> {{$program->method_delete == 'true' ? 'SIM' : 'NÃO'}}</span><br>
                                                            </td>
                                                            <td class="text-light">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Programa" data-dados="{{json_encode(['id' => $program->id, 'menu_create' => 'program'])}}" data-route="{{route('setting.admin.menu')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                                    <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarPrograma" data-dados="{{json_encode($program)}}"><i class="ri-edit-box-line"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="novoAcessoPrincipal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoMenuPrincipal">
                    <input type="hidden" name="menu_create" value="main_access">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Menu Principal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="menu_name">Nome do Acesso Principal</label>
                                <input type="text" name="menu_name" class="form-control" placeholder="Nome do Menu Principal">
                            </div>
                            <div class="form-group col-12">
                                <label for="menu_route">Rota do Acesso Principal</label>
                                <input type="text" name="menu_route" class="form-control" placeholder="Rota do Menu Principal">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".MenuPrincipal" data-update_table="S" data-save_target="#postNovoMenuPrincipal" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarAcessoPrincipal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarMenuPrincipal">
                    <input type="hidden" name="id">
                    <input type="hidden" name="menu_create" value="main_access">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Menu Principal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="menu_name">Nome do Menu Principal</label>
                                <input type="text" name="menu_name" class="form-control" placeholder="Nome do Menu Principal">
                            </div>
                            <div class="form-group col-12">
                                <label for="menu_route">Rota do Menu Principal</label>
                                <input type="text" name="menu_route" class="form-control" placeholder="Rota do Menu Principal">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".MenuPrincipal" data-update_table="S" data-save_target="#postEditarMenuPrincipal" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="novoModulo">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoModulo">
                    <input type="hidden" name="menu_create" value="module">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Modulo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="main_access_id">Acesso Principal</label>
                                <select name="main_access_id"class="form-control">
                                    <option value="">- Selecionar uma Opção -</option>
                                    @foreach ($main_access as $mainaccess)
                                        <option value="{{$mainaccess->id}}">{{$mainaccess->menu_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="module_name">Nome do Modulo</label>
                                <input type="text" name="module_name" class="form-control" placeholder="Nome do Sub. Menu">
                            </div>
                            <div class="form-group col-12">
                                <label for="module_route">Rota do Modulo</label>
                                <input type="text" name="module_route" class="form-control" placeholder="Rota do Sub. Menu">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".Modulo" data-update_table="S" data-save_target="#postNovoModulo" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarModulo">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarModulo">
                    <input type="hidden" name="id">
                    <input type="hidden" name="menu_create" value="module">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Modulo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="main_access_id">Acesso Principal</label>
                                <select name="main_access_id" class="form-control main_access_id">
                                    <option value="">- Selecionar uma Opção -</option>
                                    @foreach ($main_access as $mainaccess)
                                        <option value="{{$mainaccess->id}}">{{$mainaccess->menu_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="module_name">Nome do Modulo</label>
                                <input type="text" name="module_name" class="form-control" placeholder="Nome do Sub. Menu">
                            </div>
                            <div class="form-group col-12">
                                <label for="module_route">Rota do Modulo</label>
                                <input type="text" name="module_route" class="form-control" placeholder="Rota do Sub. Menu">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".Modulo" data-update_table="S" data-save_target="#postEditarModulo" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="novoPrograma">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoPrograma">
                    <input type="hidden" name="menu_create" value="program">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Programa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="module_id">Modulo</label>
                                <select name="module_id"class="form-control">
                                    <option value="">- Selecionar uma Opção -</option>
                                    @foreach ($modules as $module)
                                        <option value="{{$module->id}}">{{$module->module_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="program_name">Nome do Programa</label>
                                <input type="text" name="program_name" class="form-control" placeholder="Nome do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="function_name">Nome da Função</label>
                                <input type="text" name="function_name" class="form-control" placeholder="Nome da Função">
                            </div>
                            <div class="form-group col-12">
                                <label for="program_route">Rota do Programa</label>
                                <input type="text" name="program_route" class="form-control" placeholder="Rota do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="route_name">Nome da Rota</label>
                                <input type="text" name="route_name" class="form-control" placeholder="Nome da Rota do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="controller_name">Nome do Controller</label>
                                <input type="text" name="controller_name" class="form-control" placeholder="Nome do Controlador">
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Get </p>
                                        <input type="checkbox" name="method_get" class="custom-control-input bg-success" id="method_get_check" checked="">
                                        <label class="custom-control-label" for="method_get_check">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Post </p>
                                        <input type="checkbox" name="method_post" class="custom-control-input bg-success" id="method_post_check" checked="">
                                        <label class="custom-control-label" for="method_post_check">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Delete </p>
                                        <input type="checkbox" name="method_delete" class="custom-control-input bg-success" id="method_delete_check" checked="">
                                        <label class="custom-control-label" for="method_delete_check">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".Programa" data-update_table="S" data-save_target="#postNovoPrograma" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarPrograma">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarPrograma">
                    <input type="hidden" name="id">
                    <input type="hidden" name="menu_create" value="program">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Programa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="module_id">Modulo</label>
                                <select name="module_id"class="form-control">
                                    <option value="">- Selecionar uma Opção -</option>
                                    @foreach ($modules as $module)
                                        <option value="{{$module->id}}">{{$module->module_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="program_name">Nome do Programa</label>
                                <input type="text" name="program_name" class="form-control" placeholder="Nome do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="function_name">Nome da Função</label>
                                <input type="text" name="function_name" class="form-control" placeholder="Nome da Função">
                            </div>
                            <div class="form-group col-12">
                                <label for="program_route">Rota do Programa</label>
                                <input type="text" name="program_route" class="form-control" placeholder="Rota do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="route_name">Nome da Rota</label>
                                <input type="text" name="route_name" class="form-control" placeholder="Nome da Rota do Programa">
                            </div>
                            <div class="form-group col-12">
                                <label for="controller_name">Nome do Controller</label>
                                <input type="text" name="controller_name" class="form-control" placeholder="Nome do Controlador">
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Get </p>
                                        <input type="checkbox" name="method_get" class="custom-control-input bg-success" id="method_get_check-edit" checked="">
                                        <label class="custom-control-label" for="method_get_check-edit">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Post </p>
                                        <input type="checkbox" name="method_post" class="custom-control-input bg-success" id="method_post_check-edit" checked="">
                                        <label class="custom-control-label" for="method_post_check-edit">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> Metodo Delete </p>
                                        <input type="checkbox" name="method_delete" class="custom-control-input bg-success" id="method_delete_check-edit" checked="">
                                        <label class="custom-control-label" for="method_delete_check-edit">
                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".Programa" data-update_table="S" data-save_target="#postEditarPrograma" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection