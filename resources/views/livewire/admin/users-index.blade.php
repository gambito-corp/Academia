<div class="card">
    <div class="card-header">
        {{--        <a href="{{route('admin.users.create')}}" class="btn btn-success"> Crear un Usuario Mas </a>--}}
        <input type="text" class="form-control w-100 mt-3" placeholder="Escriba un nombre" wire:model="search" wire:keydown="LimiarPage">
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>email</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td class="d-inline-block">
                        <a class="btn btn-outline-success btn-sm d-inline-block mr-2" href="{{route('admin.users.edit', $data)}}"><i class="fas fa-fw fa-user"></i></a>
                        <a class="btn btn-outline-info btn-sm d-inline-block mr-2" href="{{route('admin.users.edit', $data)}}"><i class="fas fa-fw fa-edit"></i></a>
                        <br>
                        <a class="btn btn-outline-secondary btn-sm d-inline-block mr-2" href="{{route('admin.users.edit', $data)}}"><i class="fas fa-fw fa-eye"></i></a>
                        <form action="{{route('admin.users.destroy', $data)}}" method="post" class="d-inline-block">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm d-inline-block" value="">
                                <i class="fas fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay Usuarios con esos Parametros de Busqueda</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$users->links()}}
    </div>
</div>

