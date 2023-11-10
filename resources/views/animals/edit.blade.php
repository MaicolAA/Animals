@extends('welcome')

@section('content')

<div>
    <h2>Editar Animal</h2>

    <form method="POST" action="{{ route('update', ['idanimal' => $animal->idanimal]) }}">

        @csrf

        <div class="form-group">
            <label for="nombreanimal">Nombre:</label>
            <input type="text" class="form-control" id="nombreanimal" name="nombreanimal" value="{{$animal->nombreanimal}}">
        </div>
        <div class="form-group">
            <label for="descanimal">Descripción:</label>
            <input type="text" class="form-control" id="descanimal" name="descanimal" value="{{$animal->descanimal}}">
        </div>
        <div class="form-group">
            <label for="fechanacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="{{$animal->fechanacimiento}}">
        </div>
        <div class="form-group">
            <label for="idtipoanimal">Tipo de Animal:</label>
            <select class="form-control" id="idtipoanimal" name="idtipoanimal">
                @foreach($tipoanimal as $tipoanimal)
                    <option value="{{ $tipoanimal->idtipoanimal }}">{{ $tipoanimal->nombretipoanimal }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

@endsection
