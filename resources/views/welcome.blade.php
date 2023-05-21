@extends('layouts.app')

@section('content')

<div class="container">
    
    
    <h1>
        Cursos y matriculas IUD
    </h1>

    <hr>

    <div class="row justify-content-center row--courses">
        <div class="card card--courses" style="width: 21rem; margin:0 10px">
            <img class="card-img-top img--card"
                src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robotica C05438-002</h5>
                <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves
                    pensamiento propio.</p>
                <a href="#" class="btn btn-primary">Ir al curso</a>
            </div>
        </div>

        <div class="card card--courses" style="width: 21rem; margin:0 10px">
            <img class="card-img-top img--card"
                src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robotica C05438-002</h5>
                <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves
                    pensamiento propio.</p>
                <a href="#" class="btn btn-primary">Ir al curso</a>
            </div>
        </div>

        <div class="card card--courses" style="width: 21rem; margin:0 10px">
            <img class="card-img-top img--card"
                src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robotica C05438-002</h5>
                <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves
                    pensamiento propio.</p>
                <a href="#" class="btn btn-primary">Ir al curso</a>
            </div>
        </div>

    </div>
</div>
@endsection
