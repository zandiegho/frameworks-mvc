@extends('dasboard.master')
@section('content')

@include('dasboard.partials.validation-error')

<form action=" {{ route("user.update", $user->id) }}" method="POST">
    @method('PUT')
    @include('dasboard.user._form', ['pasw' => false])
</form>
    
@endsection