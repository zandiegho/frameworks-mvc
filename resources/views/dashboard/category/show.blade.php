@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Categoria Seleccionada</h2>

    <div class="row">
        <div class="col">
            <label for="title">Categoria</label>
            <p id="title">{{ $registro->title }}</p>
        </div>

        <div class="col">
            <label for="title">Slug</label>
            <p id="title">{{ $registro->slug }}</p>
        </div>

{{--         <div class="col">
            <a href="{{route('categories.edit', $registro->id)}}" class="btn btn-info">Editar</a>            
        </div> --}}
    </div>

</div>

@endsection
