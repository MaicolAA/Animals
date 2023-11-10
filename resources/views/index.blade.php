@extends('welcome')


@section('content')

<div>
    <h6 class="text-center">Ver registros tipo de animal donde la cantidad sea mas de 2 que tienen fecha de nacimiento posterior al 2020 </h6>
    <br><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tipo Animal</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>

        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td>{{$registro->tipoanimal}}</td>
                <td>{{$registro->cantidad}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
