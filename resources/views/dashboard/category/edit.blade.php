@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Editar Categoria</h2>

    {{-- @dd($categorias) --}}

    <form method="POST" action="{{ route('categories.update', $registros->id) }}">
        @csrf
        @method('PUT')

        <br>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <div class="label">
                        <label for="title">Title</label>
                    </div>
                    <input type="text" class="form-control" name="title" value="{{ $registros->title }}">
                </div>
            </div>

            <div class="col">
                
                <div class="form-group">

                    <div class="label">
                        <label for="slug">Slug</label>
                    </div>

                    <input type="text" class="form-control" name="slug" value="{{ $registros->slug }}">

                </div>
            </div>


            <div class="col">
                <div class="form-group">
                    <div class="label">
                        <label><label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Guardar cambios</button>
                </div>
            </div>

        </div>
    </form>
</div>

@endsection
