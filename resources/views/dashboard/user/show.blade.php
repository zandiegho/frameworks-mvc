@extends('dasboard.master')

@section('content')


<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input readonly type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input readonly type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
</div>

@endsection
