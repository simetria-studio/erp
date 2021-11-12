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
                                        <h4 class="card-title">Empresas</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('setting.company.registration.create')}}" class="btn btn-block btn-success"><i class="ri-add-fill"></i> Novo Registro</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Razão Social</th>
                                            <th>Nome Fantasia</th>
                                            <th>document_number</th>
                                            <th>Pais</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="Companies">
                                        @foreach ($companies as $company)
                                            <tr class="tr-id-{{$company->id}}">
                                                <td>{{$company->corporate_name}}</td>
                                                <td>{{$company->fantasy_name}}</td>
                                                <td>{{$company->document_number}}</td>
                                                <td>{{$company->country}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Companies" data-dados="{{json_encode(['id' => $company->id])}}" data-route="{{route('setting.company.registration')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                        <a href="{{route('setting.company.registration.edit', $company->id)}}" class="btn btn-info"><i class="ri-edit-box-line"></i></a>
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
@endsection

