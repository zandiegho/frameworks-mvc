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

                <div class="row justify-content-end">
                    <div class="col-4 btn" >
                        <button type="submit" class="btn btn-primary" id="btnEnviar">Registrar Categoria</button>
                    </div>

                    <div class="col-4 btn" >
                        <button type="reset" class="btn btn-info" id="btnEnviar">Limpiar Campos</button>
                    </div>

                    <div class="col-4 btn">
                        <a href="{{route('showIndex')}}" class="btn btn-info">Regresar al menu</a>
                    </div>

                </div> {{-- fin row --}}
            </form>

        </div> {{-- fin form --}}


    </div> {{-- fin container --}}
        
@endsection
