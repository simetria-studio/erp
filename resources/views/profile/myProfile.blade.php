@extends('layouts.painel')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        @foreach ($companies as $company)
                            <div class="col-12 col-md-6">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Empresa <b>{{$company->corporate_name}}</b></h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <div class="row" style="max-height: 300px; overflow-y: auto;">
                                            <div class="col-12 py-2">Razão Social: {{$company->corporate_name}}</div>
                                            <div class="col-12 py-2">Nome Fantasia: {{$company->fantasy_name}}</div>
                                            <div class="col-12 py-2">Endereço: {{$company->address}}, Nº {{$company->number}} - {{$company->address2}}</div>
                                            <div class="col-12 py-2">Cidade/Estado: {{$company->city}}/{{$company->state}} - {{$company->country}}</div>
                                            <div class="col-12 py-2">{{$company->kind_of_person}}: {{$company->document_number}}</div>
                                            <div class="col-12 py-2">Registro Estadual: {{$company->state_registration}}</div>
                                            <div class="col-12 py-2">Registro Municipal: {{$company->municipal_registration}}</div>
                                            <div class="col-12 py-2">Telefones: {{$company->phone1}} // {{$company->phone2}}</div>
                                            <div class="col-12 py-2">Email: {{$company->email}}</div>
                                            <div class="col-12 py-2">Nome para Contato: {{$company->contact_name}}</div>
                                            <div class="col-12 py-2">Atividade Economica: {{$company->economic_activity}}</div>
                                            <div class="col-12 py-2">Site: {{$company->http}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Dados do Usuario</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-12 py-2">Nome: {{auth()->user()->name}}</div>
                                <div class="col-12 py-2">Email de Login: {{auth()->user()->email}}</div>
                                <div class="col-12 py-2">
                                    Nivel de Usuario:
                                    @if (auth()->user()->permission == 10)
                                        <b>Administrador do Sistema</b>
                                    @elseif (auth()->user()->permission == 5)
                                        <b>Administrativo</b>
                                    @elseif (auth()->user()->permission == 1)
                                        <b>Padrão</b>
                                    @elseif (auth()->user()->permission == 0)
                                        <b>Sem Acesso</b>
                                    @endif
                                </div>
                                <div class="col-12 col-md-4 py-2">
                                    Genero:
                                    @if (auth()->user()->sex == 'M')
                                        <b>Masculino</b>
                                    @elseif (auth()->user()->sex == 'F')
                                        <b>Feminino</b>
                                    @elseif (auth()->user()->sex == '0')
                                        <b>Prefiro Não Dizer</b>
                                    @endif
                                </div>
                                <div class="col-12 col-md-4 py-2">Numero do Documento: {{auth()->user()->document_number}}</div>
                                <div class="col-12 col-md-4 py-2">RG: {{auth()->user()->rg}}</div>
                                <div class="col-12 col-md-4 py-2">Telefones: {{auth()->user()->phone1}} // {{auth()->user()->phone2}}</div>
                                <div class="col-12 col-md-4 py-2">Linguagem: {{auth()->user()->language}}</div>
                                <div class="col-12 col-md-4 py-2">Tema: {{auth()->user()->theme == 'white-html' ? 'Claro' : 'Escuro'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection