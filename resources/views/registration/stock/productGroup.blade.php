@extends('layouts.painel')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="iq-card">
                        <div class="iq-card-header">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Grupos de Produtos</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#novoGrupoProduto"><i class="ri-add-fill"></i> Novo Grupo de Produto</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Codigo Grupo</th>
                                            <th>Empresa</th>
                                            <th>Nome Grupo</th>
                                            <th>Status Grupo</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="GrupoProduto">
                                        @foreach ($companies as $company)
                                            @foreach ($company->productsGroups as $product_group)
                                                <tr class="tr-id-{{$product_group->id}}">
                                                    <td>{{$product_group->id}}</td>
                                                    <td>{{$product_group->company->corporate_name}}</td>
                                                    <td>{{$product_group->name}}</td>
                                                    <td>
                                                        @if ($product_group->status == 1)
                                                            <span class="text-success">Ativo</span>
                                                        @else
                                                            <span class="text-danger">Inativo</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados="{{json_encode(['id' => $product_group->id])}}" data-route="{{route('registration.stock.product_group')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                            <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarGrupoProduto" data-dados="{{json_encode($product_group)}}"><i class="ri-edit-box-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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

    <div class="modal fade" id="novoGrupoProduto">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoGrupoProduto">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Grupo de Prodtuo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="company_id">Empresa <span class="text-danger">*</span></label>
                                <select name="company_id" class="form-control">
                                    <option value="">Selecione uma Opção</option>
                                    @foreach ($companies as $company)
                                        <option value="{{$company->id}}">{{$company->corporate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Nome do Grupo</label>
                                <input type="text" name="name" class="form-control" placeholder="Nome do Grupo">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".GrupoProduto" data-update_table="S" data-save_target="#postNovoGrupoProduto" data-save_route="{{route('registration.stock.product_group')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarGrupoProduto">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarGrupoProduto">
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Grupo de Produto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="company_id">Empresa <span class="text-danger">*</span></label>
                                <select name="company_id" class="form-control">
                                    <option value="">Selecione uma Opção</option>
                                    @foreach ($companies as $company)
                                        <option value="{{$company->id}}">{{$company->corporate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Nome do Grupo</label>
                                <input type="text" name="name" class="form-control" placeholder="Nome do Grupo">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-type="PUT" data-tbody=".GrupoProduto" data-update_table="S" data-save_target="#postEditarGrupoProduto" data-save_route="{{route('registration.stock.product_group')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

