@extends('layouts.painel')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Alteração de Dados</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('profile.save')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="">Nome Completo</label>
                                        <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Email (não pode ser alterado)</label>
                                        <input type="text" class="form-control" value="{{auth()->user()->email}}" disabled>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Genero</label>
                                        <select name="sex" class="form-control">
                                            <option value="M" @if(auth()->user()->sex == 'M') selected @endif>Masculino</option>
                                            <option value="F" @if(auth()->user()->sex == 'F') selected @endif>Feminino</option>
                                            <option value="0" @if(auth()->user()->sex == '0') selected @endif>Prefiro não Dizer</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Numero do CPF</label>
                                        <input type="text" name="document_number" class="form-control" value="{{auth()->user()->document_number}}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Numero do RG</label>
                                        <input type="text" name="rg" class="form-control" value="{{auth()->user()->rg}}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Telefone</label>
                                        <input type="text" name="phone1" class="form-control" value="{{auth()->user()->phone1}}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Celular</label>
                                        <input type="text" name="phone2" class="form-control" value="{{auth()->user()->phone2}}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Linguagem</label>
                                        <select name="language" class="form-control">
                                            <option value="PT-BR" @if(auth()->user()->language == 'PT-BR') selected @endif>PT-BR</option>
                                        </select>
                                    </div>

                                    <div class="col-12 form-group d-flex justify-content-center">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="theme-white" name="theme" @if(auth()->user()->theme == 'white-html') checked @endif value="white-html" class="custom-control-input">
                                            <label class="custom-control-label" for="theme-white"> Tema Claro</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="theme-dark" name="theme" @if(auth()->user()->theme == 'dark-html') checked @endif value="dark-html" class="custom-control-input">
                                            <label class="custom-control-label" for="theme-dark"> Tema Escuro</label>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="">Nova Senha (ara não ser alterado deixar em branco)</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Confirma Nova Senha</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>

                                    <div class="col-12">
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