<!DOCTYPE html>
<html>
<head>
    <title>Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1 class="text-center">Animales</h1><br><br>

    <div class="row justify-content-center">
        <div class="col-md-3 text-center">
            <a href="{{route('index')}}" class="btn btn-primary btn-block mb-5">INDEX</a>
        </div>
        <div class="col-md-3 text-center">
            <a href="{{route('crud')}}" class="btn btn-success btn-block mb-5">CRUD</a>
        </div>


        @yield('content')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
