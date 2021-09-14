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
                            {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoMenu"><i class="ri-add-line"></i> Novo Menu</button> --}}
                        </div>
                        <div class="iq-card-body">
                            <ul class="nav nav-pills mb-3 nav-fill" id="pills-menu" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-main_access-tab-fill" data-toggle="pill" href="#pills-main_access-fill" role="tab" aria-controls="pills-main_access" aria-selected="false">Menu Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab-fill" data-toggle="pill" href="#pills-contact-fill" role="tab" aria-controls="pills-contact" aria-selected="true">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade active show" id="pills-main_access-fill" role="tabpanel" aria-labelledby="pills-main_access-tab-fill">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoMenuPrincipal"><i class="ri-add-line"></i> Novo Menu</button>
                                        </div>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-light">#</th>
                                                        <th class="text-light">Nome do Menu</th>
                                                        <th class="text-light">Rota do Menu</th>
                                                        <th class="text-light">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="postNovoMenuPrincipal">
                                                    @foreach ($main_access as $mainaccess)
                                                        <tr class="tr-id-{{$mainaccess->id}}">
                                                            <td class="text-light">#{{$mainaccess->id}}</td>
                                                            <td class="text-light">{{$mainaccess->menu_name}}</td>
                                                            <td class="text-light">{{$mainaccess->menu_route}}</td>
                                                            <td class="text-light">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-danger btn-apagar" data-id="{{$mainaccess->id}}"><i class="ri-delete-bin-5-line"></i></button>
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
                                <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact-fill" role="tabpanel" aria-labelledby="pills-contact-tab-fill">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="novoMenuPrincipal">
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
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-update_table="S" data-save_target="#postNovoMenuPrincipal" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarMenuPrincipal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarMenuPrincipal">
                    <input type="hidden" name="id">
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
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-update_table="S" data-save_target="#postEditarMenuPrincipal" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="novoMenu">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoMenu">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="category_name">Nome da Categoria</label>
                                <select name="main_access" select=""></select>
                                <input type="text" name="category_name" class="form-control" placeholder="Nome da Categoria">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-update_table="S" data-save_target="#postNovoMenu" data-save_route="{{route('setting.admin.menu')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection