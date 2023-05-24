   
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
</div>

@if($pasw)
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" 
    value="{{ old('password', $user->password) }}">
</diV>
@endif
<input type="submit" value="Enviar" class="btn btn-primary">

    

