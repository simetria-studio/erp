@extends('layouts.painel')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <a class="btn btn-primary" href="{{route('dashboard')}}">Dashboard</a>
                            <a class="btn btn-primary float-right" href="{{$rota}}">Voltar</a>
                        </div>
                        <div class="iq-card-body">
                            <h2 class="text-success text-center"><strong>{{$msg}}</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="{{asset('theme/dark-html/images/page-img/img-success.png')}}" class="fit-image" alt="fit-image"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection