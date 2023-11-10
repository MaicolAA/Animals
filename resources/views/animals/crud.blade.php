@extends('welcome')


@section('content')

<div>

    <br><br>
    <a href="{{ route('new') }}" class="btn btn-warning">Añadir Animal</a>

    <br><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Tipo Animal</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($animals as $animal)
            <tr>
                <td>{{$animal->idanimal}}</td>
                <td>{{$animal->nombreanimal}}</td>
                <td>{{$animal->descanimal}}</td>
                <td>{{$animal->fechanacimiento}}</td>


                <td {{$tipoAnimal = $tipoanimal->firstWhere('idtipoanimal', $animal->idtipoanimal)}}>
                    {{$tipoAnimal->nombretipoanimal }}
                </td>
                
                <td>
                    <a href="{{route('edit', $animal->idanimal)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('delete', $animal->idanimal) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>


            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection

