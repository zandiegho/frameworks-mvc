@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Category title" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control " id="slug" name="slug" placeholder="Slug for category" required>
                </div>

                <br>

                <button type="submit" class="btn btn-primary" id="btnEnviar">Registrar Categoria</button>
            </form>

        </div>
    </div>
        
@endsection
