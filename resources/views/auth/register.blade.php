@extends('layouts.auth')

@section('content')
    <!-- Sign in Start -->
    <section class="sign-in-">
        <div class="container p-0 bg-white">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Seja bem vindo</h1>
                        <p>Leva apenas <span class="text-success">alguns segundos</span> para criar sua conta</p>
                        <form action="{{route('register')}}" method="post" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="email"><span class="text-danger">*</span> Email</label>
                                <input name="email" placeholder="Digite seu Email" value="{{old('email')}}" type="email" class="form-control mb-0 @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name"><span class="text-danger">*</span> Nome Completo</label>
                                <input name="name" placeholder="Digite seu Nome" value="{{old('name')}}" type="text" class="form-control mb-0 @error('name') is-invalid @enderror">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cpf_cnpj"><span class="text-danger">*</span> CPF/CNPJ</label>
                                <input name="cpf_cnpj" placeholder="Digite seu CPF/CNPJ" value="{{old('cpf_cnpj')}}" type="text" class="form-control mb-0 @error('cpf_cnpj') is-invalid @enderror">
                                @error('cpf_cnpj')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><span class="text-danger">*</span> Senha</label>
                                <input name="password" placeholder="Digite sua Senha" value="{{old('email')}}" type="password" class="form-control mb-0 @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"><span class="text-danger">*</span> Repetir Senha</label>
                                <input name="password_confirmation" placeholder="Repetir sua senha" type="password" class="form-control mb-0">
                            </div>

                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input name="check" type="checkbox" class="custom-control-input" id="terms">
                                    <label class="custom-control-label" for="terms">Aceitar os <a href="#">Termos e Condições</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">registrar</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Já possui registro? <a href="{{route('login')}}">Clique Aqui</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="{{asset('theme/dark-html/images/logo-white.png')}}" class="img-fluid" alt="logo"></a>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{asset('theme/dark-html/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum.</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('theme/dark-html/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum.</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('theme/dark-html/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
@endsection