
@extends('welcome')

@section('content')

<form action="{{route('store')}}" method="POST">
    @csrf

    <br>
    <h5 class="text-center">Crear Animal</h5>
    <br><br>
    <div class="form-group">
        <label for="nombreanimal">Nombre:</label>
        <input type="text" class="form-control" id="nombreanimal" name="nombreanimal" required >
    </div>
    <div class="form-group">
        <label for="descanimal">Descripción:</label>
        <input type="text" class="form-control" id="descanimal" name="descanimal" required>
    </div>
    <div class="form-group">
        <label for="fechanacimiento">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" required >
    </div>
    <div class="form-group">
        <label for="idtipoanimal">Tipo de Animal:</label>
        <select class="form-control" id="idtipoanimal" name="idtipoanimal" required>
            @foreach($tipoanimal as $tipoanimal)
                <option value="{{$tipoanimal->idtipoanimal}}">{{$tipoanimal->nombretipoanimal}}</option>
            @endforeach
        </select>
    </div>

    <br>
    <button type="submit" class="btn btn-warning">Crear</button>
</form>

@endsection
