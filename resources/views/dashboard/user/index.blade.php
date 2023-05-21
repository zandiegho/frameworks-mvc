<div class="row justify-content-center">
    <div class="container table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Creación</th>
                    <th scope="col">Actualización</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->rol_name }}</td>
                    <td>{{ $user->created_at->format('d-m-Y H:i:s') }}</td>
                    <td>{{ $user->updated_at->format('d-m-Y H:i:s') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Actualizar</a>
                        <button data-toggle="modal" data-target="#deleteModal" data-id="{{$user->id}}"
                            class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>