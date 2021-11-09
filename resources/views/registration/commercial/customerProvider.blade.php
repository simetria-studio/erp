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
                                        <h4 class="card-title">Clientes e Fornecedores</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('registration.commercial.customer_provider.create')}}" class="btn btn-block btn-success"><i class="ri-add-fill"></i> Novo Registro</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Empresa</th>
                                            <th>Nome/Razão Social</th>
                                            <th>Apelido/Nome Fantasia</th>
                                            <th>Documento</th>
                                            <th>Cidade</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="ClienteSupplier">
                                        @foreach ($companies as $company)
                                            @foreach ($company->clientSuppliers as $client_supplier)
                                                <tr class="tr-id-{{$v->id}}">
                                                    <td>{{$client_supplier->id}}</td>
                                                    <td>{{$company->corporate_name}}</td>
                                                    <td>{{$client_supplier->corporate_name}}</td>
                                                    <td>{{$client_supplier->fantasy_name}}</td>
                                                    <td>{{$client_supplier->document_number}}</td>
                                                    <td>{{$client_supplier->city}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger btn-apagar" data-tbody=".ClienteSupplier" data-dados="{{json_encode(['id' => $client_supplier->id])}}" data-route="{{route('registration.commercial.customer_provider')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                            <a href="{{route('registration.commercial.customer_provider.edit', $client_supplier->id)}}" class="btn btn-info"><i class="ri-edit-box-line"></i></a>
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
@endsection

