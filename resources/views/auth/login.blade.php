@extends('layouts.auth')

@section('content')
    {{-- <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider slick-initialized">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('https://i.pinimg.com/736x/07/43/d5/0743d51a47a8b3b4846bfbdf03536b8f.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Bem vindo de volta.</span>
                                <span>Faça login para acessar sua conta.</span>
                            </h4>
                            <h6 class="mt-3">Não possui conta? <a href="{{route('register')}}" class="text-primary">Registre-se aqui.</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form class="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="email" class="">Email</label>
                                                <input name="email" placeholder="Email de Login" type="email" class="form-control @error('email') is-invalid @enderror">

                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="password" class="">Password</label>
                                                <input name="password" placeholder="Sua senha" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input name="remember" id="checkRemenber" type="checkbox" class="form-check-input">
                                        <label for="checkRemenber" class="form-check-label">Lembrar-me</label>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <a href="{{route('password.request')}}" class="btn-lg btn btn-link">Esqueci a senha.</a>
                                            <button type="submit" class="btn btn-hover-shine btn-primary btn-lg">Efetuar Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container bg-white p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Bem vindo de volta.</h1>
                        <p>Faça login para acessar sua conta.</p>
                        <form action="{{route('login')}}" method="post" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="">Email</label>
                                <input name="email" placeholder="Email de Login" type="email" class="form-control mb-0 @error('email') is-invalid @enderror">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Password</label>
                                <a href="{{route('password.request')}}" class="float-right">Esqueceu a senha?</a>
                                <input name="password" placeholder="Sua senha" type="password" class="form-control mb-0">
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Efetuar Login</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Ainda não possui uma conta? <a href="{{route('register')}}">Clique Aqui</a></span>
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