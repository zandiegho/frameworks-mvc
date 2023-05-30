@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Index de categorias</h2>              
        <br>
        <a href="{{route('categories.create')}}" class="btn btn-primary">Crear categoria</a>
        <br>

        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITULO DE CATEGORÍA</th>
                    <th>FRECHA DE CREACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach($listaCategorias as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->created_at}}</td>
                        {{-- <td>{{$category->slug}}</td> --}}
                        <td>
                            <a href="{{route('categories.show', $category->id)}}" class="btn btn-info">Ver</a>
                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Editar</a>


                            <form class="btn" action="{{ route('categories.destroy', $category->id) }}" 
                                method="POST"> 
                                @csrf  
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
