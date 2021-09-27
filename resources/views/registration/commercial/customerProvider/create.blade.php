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
                                        <h4 class="card-title">Registrar um Cliente ou Fornecedore</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('registration.commercial.customer_provider')}}" class="btn btn-block btn-success"><i class="ri-arrow-left-line"></i> Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form action="{{route('registration.commercial.customer_provider')}}" method="post">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="company_id">Empresa <span class="text-danger">*</span></label>
                                        <select name="company_id" class="form-control @error('company_id') is-invalid @enderror">
                                            <option value="">Selecione uma Opção</option>
                                            @foreach ($companies as $company)
                                                <option value="{{$company->id}}" {{old('company_id') == $company->id ? ' selected' : ''}}>{{$company->corporate_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12"><h4>Dados Cadastrais</h4></div>

                                    <div class="form-group col-12 col-md-4">
                                        <label for="corporate_name">Nome/Razão Social <span class="text-danger">*</span></label>
                                        <input name="corporate_name" type="text" value="{{old('corporate_name')}}" class="form-control @error('corporate_name') is-invalid @enderror" placeholder="Nome ou Razão Social">
                                        @error('corporate_name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="fantasy_name">Nome Fantasia/Apelido</label>
                                        <input name="fantasy_name" value="{{old('fantasy_name')}}" type="text" class="form-control" placeholder="Nome Fantasia ou Apelido">
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="type_person">Tipo de Pessoa</label>
                                        <select name="type_person" id="type_person" class="form-control">
                                            <option value="J" value="{{old('type_person') == 'J' ? 'selected' : ''}}">Pessoa Juridica</option>
                                            <option value="F" value="{{old('type_person') == 'F' ? 'selected' : ''}}">Pessoa Fisica</option>
                                            <option value="E" value="{{old('type_person') == 'E' ? 'selected' : ''}}">Estrangeiro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4 document-number">
                                        <label for="document_number"><span class="D-J">CNPJ</span><span class="d-none D-F">CPF</span></label>
                                        <input name="document_number" value="{{old('document_number')}}" type="text" class="form-control" placeholder="Informar o Numero do Documento escolhido">
                                    </div>
                                    <div class="form-group col-12 col-md-4 tax-regime-code">
                                        <label for="tax_regime_code">Código de Regime Tributário</label>
                                        <select name="tax_regime_code" class="form-control">
                                            <option value="0" {{old('tax_regime_code') == '0' ? ' selected' : ''}}>Não definido</option>
                                            <option value="1" {{old('tax_regime_code') == '1' ? ' selected' : ''}}>Simples nacional</option>
                                            <option value="2" {{old('tax_regime_code') == '2' ? ' selected' : ''}}>Simples nacional - Excesso de sublimite de receita bruta</option>
                                            <option value="3" {{old('tax_regime_code') == '3' ? ' selected' : ''}}>Regime normal</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="customer_since">Cliente Desde</label>
                                        <input name="customer_since" value="{{old('customer_since')}}" type="text" class="form-control date-mask" >
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="taxpayer">Contribuinte</label>
                                        <select name="taxpayer" class="form-control" id="taxpayer">
                                            <option value="1" {{old('taxpayer') == 1 ? ' selected' : ''}}>1 - Contribuinte ICMS</option>
                                            <option value="2" {{old('taxpayer') == 2 ? ' selected' : ''}}>2 - Contribuinte isento de Inscrição no Cadastro de Contribuintes</option>
                                            <option value="9" {{old('taxpayer') == 9 ? ' selected' : ''}}>9 - Não contribuinte, que pode ou não possuir Inscrição Estadual no Cadastro de Contribuintes</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4 state-registration">
                                        <label for="state_registration">Inscrição Estadual</label>
                                        <input name="state_registration" value="{{old('state_registartion')}}" type="text" class="form-control" placeholder="Inscrição Estadual">
                                    </div>
                                    <div class="form-group col-12 col-md-1 ie-exempt">
                                        <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                            <div class="custom-switch-inner">
                                                <p>IE Isento</p>
                                                <input type="checkbox" name="ie_exempt" {{old('corporate_name') == 'on' ? 'checked' : ''}} class="custom-control-input bg-success" id="ie_exempt_check">
                                                <label class="custom-control-label" for="ie_exempt_check">
                                                    <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                    <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-3 municipal-registration">
                                        <label for="municipal_registration">Inscrição Municipal</label>
                                        <input name="municipal_registration" value="{{old('municipal_registration')}}" type="text" class="form-control" placeholder="Inscrição Municipal">
                                    </div>
                                    <div class="form-group col-12 col-md-4 R-G d-none">
                                        <label for="rg">RG</label>
                                        <input name="rg" value="{{old('rg')}}" type="text" class="form-control" placeholder="Registro Geral">
                                    </div>
                                    <div class="form-group col-12 col-md-4 issuing-agency d-none">
                                        <label for="issuing_agency">Órgão Emissor</label>
                                        <input name="issuing_agency" value="{{old('issuing_agency')}}" type="text" class="form-control" placeholder="Órgão Emissor">
                                    </div>

                                    <div class="form-group col-12 col-md-4">
                                        <label for="client_type">Tipo de Cliente</label>
                                        <select name="client_type" class="form-control">
                                            <option value="0" {{old('client_type') == '0' ? ' selected' : ''}}>Cliente</option>
                                            <option value="1" {{old('client_type') == '1' ? ' selected' : ''}}>Fornecedor</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12"><h4>Endereço</h4></div>

                                    <div class="form-group col-12 col-md-2">
                                        <label for="zip_code">CEP</label>
                                        <input type="text" name="zip_code" value="{{old('zip_code')}}" class="form-control" placeholder="CEP">
                                    </div>
                                    <div class="form-group col-12 col-md-2">
                                        <label for="state">UF</label>
                                        <input type="text" name="state" value="{{old('state')}}" class="form-control" placeholder="Estado">
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="city">Cidade</label>
                                        <input type="text" name="city" value="{{old('city')}}" class="form-control" placeholder="Cidade">
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="address2">Bairro</label>
                                        <input type="text" name="address2" value="{{old('address2')}}" class="form-control" placeholder="Bairro">
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="address">Endereço/Rua</label>
                                        <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Endereço/Rua">
                                    </div>
                                    <div class="form-group col-12 col-md-2">
                                        <label for="number">Nº</label>
                                        <input type="text" name="number" value="{{old('number')}}" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="complement">Complemento</label>
                                        <input type="text" name="complement" value="{{old('complement')}}" class="form-control" placeholder="Complemento">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="form-group col-12">
                                        <h4 class="d-inline-block">Contato</h4>
                                        <button type="button" class="btn btn-success ml-2 btn-add-contact" title="Adicionar Contato"><i class="ri-add-fill"></i></button>
                                        <input type="hidden" class="position" value="0">
                                    </div>

                                    <div class="col-12 contatos">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-4">
                                                <label for="contact">Nome do Contato</label>
                                                <input type="text" name="contact[0][contact_name]" class="form-control" placeholder="Nome do Contato">
                                            </div>
                                            <div class="form-group col-12 col-md-4">
                                                <label for="contact">Telefone</label>
                                                <input type="text" name="contact[0][phone1]" class="form-control phone1" placeholder="Telefone">
                                            </div>
                                            <div class="form-group col-12 col-md-4">
                                                <label for="contact">Celular</label>
                                                <input type="text" name="contact[0][phone2]" class="form-control phone2" placeholder="Celular">
                                            </div>
                                            <div class="form-group col-12 col-md-4">
                                                <label for="contact">E-Mail</label>
                                                <input type="text" name="contact[0][contact_email]" class="form-control" placeholder="E-Mail">
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

