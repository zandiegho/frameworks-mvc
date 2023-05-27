@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create de Publicación</h1>

        @include('dashboard.fragment._errors-form')
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @include('dashboard.posts._form')
            </form>
    </div>
        
@endsection