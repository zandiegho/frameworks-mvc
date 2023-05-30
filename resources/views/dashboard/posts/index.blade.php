@extends('layouts.app')

@section('content')
<div class="container">

    <a class="btn btn-success my-3" href="{{ route('posts.create') }}">Crear Publicación</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{ $p->title}}</td>
                <td>{{ $p->category->title}}</td>
                <td>{{ $p->posted }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('posts.show', $p) }}">Ver</a>
                    
                    <a class="btn btn-warning" href="{{ route('posts.edit', $p) }}">Editar</a>
                    
                    <form class="btn" action="{{ route('posts.destroy', $p) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
</div>

@endsection
