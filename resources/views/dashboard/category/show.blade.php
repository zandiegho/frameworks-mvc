@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Categoria Seleccionada</h2>
    <br>

    <div class="row">
        <div class="col">
            <label for="title">
                <h4>Categoria</h4>
            </label>
            <br>
            <p id="title">{{ $registro->title }}</p>
        </div>

        <div class="col">
            <label for="slug">
                <h4>Slug</h4>
            </label>
            <p id="slug">{{ $registro->slug }}</p>
        </div>
    </div>
    <br>

    <div class="row justify-content-centr">

        <div class="col btn">
            <a href="{{route('categories.edit', $registro->id)}}" class="btn btn-warning">Editar Categoría</a>
        </div>
        
        <div class="col btn">
            <a href="{{route('showIndex')}}" class="btn btn-info">Regresar al menu</a>
        </div>
        
    </div>{{-- fin row --}}
</div>

@endsection
