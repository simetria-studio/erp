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
                                <h4 class="card-title">Registrar uma Nova Empresa</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="stepwizard mt-4">
                                <div class="stepwizard-row setup-panel">
                                    <div id="company" class="wizard-step active">
                                        <a href="#company-registration" class="active btn">
                                            <i class="ri-lock-unlock-line text-primary"></i><span>Registro da Empresa</span>
                                        </a>
                                    </div>
                                    <div id="address" class="wizard-step">
                                        <a href="#company-address" class="btn btn-default disabled " >
                                            <i class="ri-map-pin-line text-danger"></i><span>Endereço da Empresa</span>
                                        </a>
                                    </div>
                                    <div id="contact" class="wizard-step">
                                        <a href="#company-contact" class="btn btn-default disabled ">
                                            <i class="ri-camera-fill text-success"></i><span>Contatos da Empresa</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <form class="form" action="{{route('setting.company.registration')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row setup-content" id="company-registration">
                                    <div class="col-sm-12">
                                        <div class="col-md-12 p-0">
                                            <h3 class="mb-4">Registro da Empresa:</h3>
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
                                                    <label for="cnpj_cpf" class="control-label">Numero do Documento</label>
                                                    <input type="text" class="form-control" required="required" name="cnpj_cpf" placeholder="Numero do Documento">
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
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Proximo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="company-address">
                                    <div class="col-sm-12">
                                        <div class="col-md-12 p-0">
                                            <h3 class="mb-4">Endereço da Empresa:</h3>
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
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Proximo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="company-contact">
                                    <div class="col-sm-12">
                                        <div class="col-md-12 p-0">
                                            <h3 class="mb-4">Contatos da Empresa:</h3>
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
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Salvar</button>
                                        </div>
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