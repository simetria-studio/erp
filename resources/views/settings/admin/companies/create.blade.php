@extends('layouts.painel')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Registrar uma Nova Empresa</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('setting.company.registration')}}" class="btn btn-block btn-success"><i class="ri-arrow-left-line"></i> Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('setting.company.registration')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <ul class="nav nav-tabs justify-content-center" id="productTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="registroEmpresa-tab-justify" data-toggle="tab" href="#registroEmpresa-justify" role="tab" aria-controls="registroEmpresa" aria-selected="true">Registro da Empresa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="endereco-tab-justify" data-toggle="tab" href="#endereco-justify" role="tab" aria-controls="endereco" aria-selected="false">Endereço da Empresa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contato-tab-justify" data-toggle="tab" href="#contato-justify" role="tab" aria-controls="contato" aria-selected="false">Contatos da Empresa</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="productTabDiv">
                                    <div class="tab-pane fade show active" id="registroEmpresa-justify" role="tabpanel" aria-labelledby="registroEmpresa-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Razão Social</label>
                                                <input type="text" name="corporate_name" required="required" class="form-control" placeholder="Nome a Empresa"  />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nome Fantasia</label>
                                                <input type="text" name="fantasy_name" class="form-control" placeholder="Nome Fantasia" />
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="kind_of_person" class="control-label">Tipo de Documento</label>
                                                <select name="kind_of_person" class="form-control" required="required">
                                                    <option value="">- Selecione uma Opção</option>
                                                    <option value="CPF">CPF</option>
                                                    <option value="CNPJ">CNPJ</option>
                                                    <option value="NIF">NIF</option>
                                                    <option value="IBAN">IBAN</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="document_number" class="control-label">Numero do Documento</label>
                                                <input type="text" class="form-control" required="required" name="document_number" placeholder="Numero do Documento">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="state_registration" class="control-label">Registro Estadual</label>
                                                <input type="text" class="form-control" name="state_registration" placeholder="Numero do Registro">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="municipal_registration" class="control-label">Registro Municipal</label>
                                                <input type="text" class="form-control" name="municipal_registration" placeholder="Numero do Registro">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="economic_activity" class="control-label">Atividade Economica</label>
                                                <input type="text" class="form-control" required="required" name="economic_activity" placeholder="Atividade Exercida">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="logo_path">Logo da Empresa</label>
                                                <input type="file" class="form-control" name="logo_path">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="endereco-justify" role="tabpanel" aria-labelledby="endereco-tab-justify">
                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <label for="zip_code" class="control-label">Codigo Postal</label>
                                                <input type="text" class="form-control" required="required" name="zip_code" placeholder="Codigo Postal">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="address" class="control-label">Endereço</label>
                                                <input type="text" class="form-control" required="required" name="address" placeholder="Endereço">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <div class="form-group">
                                                    <label for="number" class="control-label">Nº</label>
                                                    <input type="text" class="form-control" required="required" name="number" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <div class="form-group">
                                                    <label for="address2" class="control-label">Bairro</label>
                                                    <input type="text" class="form-control" required="required" name="address2" placeholder="Bairro">
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <div class="form-group">
                                                    <label for="country" class="control-label">País</label>
                                                    <input type="text" class="form-control" required="required" name="country" placeholder="país">
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <div class="form-group">
                                                    <label for="state" class="control-label">Estado</label>
                                                    <input type="text" class="form-control" required="required" name="state" placeholder="Estado">
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <div class="form-group">
                                                    <label for="city" class="control-label">Cidade</label>
                                                    <input type="text" class="form-control" required="required" name="city" placeholder="Cidade">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contato-justify" role="tabpanel" aria-labelledby="contato-tab-justify">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="phone1" class="control-label">Telefone Empresarial</label>
                                                <input type="text" class="form-control" name="phone1" placeholder="Telefone">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="phone2" class="control-label">Celular</label>
                                                <input type="text" class="form-control" required="required" name="phone2" placeholder="Celular">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="email" class="control-label">Email de Contato</label>
                                                <input type="email" class="form-control" name="email" placeholder="Emal de Contato">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="contact_name" class="control-label">Nome de Contato</label>
                                                <input type="text" class="form-control" name="contact_name" placeholder="Nome de Contato">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="http" class="control-label">Site da Empresa</label>
                                                <input type="text" class="form-control" name="http" placeholder="Site da Empresa">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="btn btn-block btn-primary"><i class="ri-save-3-line"></i> Gravar Dados</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection