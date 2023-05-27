@extends('layouts.app')
@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row align-items-center" rowspan="2">

                        <div class="col col-sm-10">
                            <h2>{{ $postPorId->title }}</h2>
                        </div>
                        
                        <div class="col col-sm-2">
                            <img src="{{asset('img/Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_0.jpg')}}" alt="img post" width="100">
                            <br>
                            <small>Posted {{$postPorId->created_at}}
                        </div>

                    </div>                   

                    <br>
                    <h6>{{$postPorId->slug}}</h6>

                    <p>{{$postPorId->description}}</p>
                    
                    <p>{{$postPorId->content}}</p>


                    

                        
                        

</div>
                        
@endsection
