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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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

