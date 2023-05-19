<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

    <div class="container">

        <h1>
            Cursos y matriculas IUD
        </h1>
        
        <hr>

        <div class="row row--courses">
            <div class="card card--courses" style="width: 21rem;">
                <img class="card-img-top img--card" src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Robotica C05438-002</h5>
                    <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves pensamiento propio.</p>
                    <a href="#" class="btn btn-primary">Ir al curso</a>
                </div>
            </div>
            
            <div class="card card--courses" style="width: 21rem;">
                <img class="card-img-top img--card" src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Robotica C05438-002</h5>
                    <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves pensamiento propio.</p>
                    <a href="#" class="btn btn-primary">Ir al curso</a>
                </div>
            </div>

            <div class="card card--courses" style="width: 21rem;">
                <img class="card-img-top img--card" src="{{ asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Robotica C05438-002</h5>
                    <p class="card-text">Curso Robotica para animar objetos recien armados, Puedes incluir si te atreves pensamiento propio.</p>
                    <a href="#" class="btn btn-primary">Ir al curso</a>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>