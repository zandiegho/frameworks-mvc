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
                            <small>{{$postPorId->description}}</small>
                        </div>
                        
                        <div class="col col-sm-2">
                            {{-- <img src="{{asset($postPorId->image)}}" alt="img post" width="100"> --}}
                            <img src="{{ asset($postPorId->image) }}" alt="Imagen" width="110">
                            <br>
                            <small>Posted {{$postPorId->created_at}}</small>
                        </div>

                        {{--  <span>{{$postPorId->image}}</span> --}}
                        {{-- C:\laragon\www\blog_project\public\storage\img\1685234665_Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_1.jpg --}}
                        {{-- public\storage\img\1685234665_Leonardo_Diffusion_Generate_an_image_of_a_futuristic_robot_wit_1.jpg --}}
                    </div>                   

                    <br>
                    <h6>{{$postPorId->slug}}</h6>

                    <br>
                    
                    <p>{{$postPorId->content}}</p>

                </div>
            </div>
        </div>
    
    </div>

</div>
                        
@endsection
