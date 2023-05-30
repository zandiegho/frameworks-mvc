@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                 
                    
                    
                    <div class="content">
                        <div class="title m-b-md">
                            Larablog
                        </div>
                        
                        @auth
                        {{ auth()->User()->rol}} {{-- no lee el metodo rol() del modelo User --}}
                        <br>
                        Bienvenido al sistema Crud para la IUDigital de antioquia.
                        <br>
                        Ya que iniciaste sesión como Administrado con el perfil de 
                        {{ auth()->user()->name}}
                        te indicamos que puedes crear categorías y posts a tu medida. 
                        <br>
                        Que esperas para Iniciar?


                        {{-- Inicio Cards --}}
                        <div class="row justify-content-center">

                            <div class="card card--courses" style="width: 13rem; margin:0 5px">
                                <img class="card-img-top img--card"
                                src="{{ asset('img/1685310308_Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_1.jpg') }}" 
                                alt="Card image cap">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Categorías</h5>
                                    <p class="card-text">Crea y maneja categorías para tus posts</p>
                                    <a href="{{route('showIndex')}}" class="btn btn-primary">Ir a categorías</a>
                                </div>
                            </div>

                            <div class="card card--courses" style="width: 13rem; margin:0 5px">
                                <img class="card-img-top img--card"
                                src="{{ asset('img/1685310308_Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_1.jpg') }}" 
                                alt="Card image cap">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Posts</h5>
                                    <p class="card-text">Crea Posts facilemente de tus categorías favoritas</p>
                                    <a href="{{route('showIndexPost')}}" class="btn btn-primary">Ir a Posts</a>
                                </div>
                            </div>
                        </div>

                        {{-- Fin Cards --}}
                        @endauth
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
