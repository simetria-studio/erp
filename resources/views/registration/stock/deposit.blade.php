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
                                        <h4 class="card-title">Depositos</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#novoDeposito"><i class="ri-add-fill"></i> Novo Deposito</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Codigo Deposito</th>
                                            <th>Empresa</th>
                                            <th>Nome Deposito</th>
                                            <th>Status Deposito</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="Deposito">
                                        @foreach ($companies as $company)
                                            @foreach ($company->deposits as $deposit)
                                                <tr class="tr-id-{{$deposit->id}}">
                                                    <td>{{$deposit->id}}</td>
                                                    <td>{{$deposit->company->corporate_name}}</td>
                                                    <td>{{$deposit->name}}</td>
                                                    <td>
                                                        @if ($deposit->status == 1)
                                                            <span class="text-success">Ativo</span>
                                                        @else
                                                            <span class="text-danger">Inativo</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados="{{json_encode(['id' => $deposit->id])}}" data-route="{{route('registration.stock.deposit')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                            <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarDeposito" data-dados="{{json_encode($deposit)}}"><i class="ri-edit-box-line"></i></button>
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

    <div class="modal fade" id="novoDeposito">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postNovoDeposito">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Deposito</h4>
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
                                <label for="name">Nome do Deposito <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Nome do Deposito">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-tbody=".Deposito" data-update_table="S" data-save_target="#postNovoDeposito" data-save_route="{{route('registration.stock.deposit')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarDeposito">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarDeposito">
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Deposito</h4>
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
                                <label for="name">Nome do Deposito</label>
                                <input type="text" name="name" class="form-control" placeholder="Nome do Deposito">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-line"></i> Fechar</button>
                        <button type="button" class="btn btn-primary btn-modal-salvar" data-type="PUT" data-tbody=".Deposito" data-update_table="S" data-save_target="#postEditarDeposito" data-save_route="{{route('registration.stock.deposit')}}"><i class="ri-save-line"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

