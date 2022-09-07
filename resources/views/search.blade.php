<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Weather App - Resultados</title>
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/db9930c3f3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app" class="main">
        <!-- Brand -->
        <main class="container">
            @include("shared.navbar")
        </main>
        <br>
        <!-- Search -->
        <section class="container">
            <h3 class="">Resultado de "{{$city}}"</h3>
            <br>
            <!-- Results -->
            @if(count($results)>0)
            <div class="my-4">
                @foreach($results as $r)
                <a class="card-search my-3" href='{{"city?name=" . $r->name . "&state=" .(isset($r->state)?$r->state:"-") .
                    "&country=". $r->country ."&lat=".$r->lat.
                    "&lon=".$r->lon}}'>
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="https://flagcdn.com/{{strtolower($r->country)}}.svg" height="64" class="ms-4 mt-2" alt="{{$r->country}}">
                        </div>
                        <div class="col">
                            <p class="desc-search fw-bold py-0">
                                {{$r->name}}, {{$r->country}}
                            </p>
                            <p class="desc-search">Temp. 28° C</p>
                            <p class="desc-search">Ubicación: {{$r->lat}}, {{$r->lon}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                <br>
                <p class="text-end" style="max-width: 95%;">Total: {{count($results)}}</p>
            </div>
            @else
            <!-- Not found -->
            <div class="my-4">
                <div class="row">
                    <div class="col text-center">
                        <i style="height: 9rem" class="fa-solid fa-map-location-dot"></i>
                        <p class="h1">Sin resultados</p>
                        <p class="my-3">Intenta con una búsqueda diferente</p>
                    </div>
                </div>
            </div>
            @endif
        </section>
        <br>
        <br>
        @include("shared.footer")
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>