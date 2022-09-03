<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <nav class="navbar navbar-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#" style="font-size: 28px;">
                        <img src="img/weather.png" alt="Logo" height="52" class="d-inline-block align-text-bottom">
                        My Weather App
                    </a>
                </div>
            </nav>
            <!-- Search -->
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <div class="col"></div>
                    <div class="col-md-5">
                        <form action="search" class="form-check-inline d-flex">
                            <input type="text" required name="city" class="form-control" placeholder="Buscar ciudad">
                            <button class="btn btn-dark btn-purple ms-3 asd">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </main>
        <br>

        <!-- Current -->
        <section class="container pb-4">
            <div class="row">
                <!-- Weather -->
                <div class="col my-3">
                    <div class="col  text-end">
                        <p class="h3 fw-bold text-white">
                            <i class="text-purple fa-solid fa-location-dot"></i>
                            {{$current["name"]}}, {{$state}}
                        </p>
                        <p class="h5 fw-light">
                            <span>
                                <img src="https://flagcdn.com/{{strtolower($current['country'])}}.svg" height="18" alt="{{$current['country']}}">
                                {{$current["country"]}}
                            </span>
                        </p>
                    </div>
                    <br>
                    <p class="align-text-bottom h4">
                        <img src="{{'http://openweathermap.org/img/wn/'.$current['weather']->icon.'@4x.png'}}" alt="Cloud" height="50" class="" style="margin-top: -10px">
                        <span class="" style="font-size: 1.8rem; font-weight: bold;">
                            {{$current["main"]->temp}} °C</span>
                        <span> - {{ucwords($current["weather"]->description)}}</span>
                    </p>
                    <!-- Metrics -->

                    <div class=" container ms-3">
                        <table width="70%">
                            <tr>
                                <td>Sensación térmica</td>
                                <td>{{$current["main"]->feels_like}} °C</td>
                            </tr>
                            <tr>
                                <td>Temperatura min.</td>
                                <td>{{$current["main"]->temp_min}} °C</td>
                            </tr>
                            <tr>
                                <td>Temperatura max.</td>
                                <td>{{$current["main"]->temp_max}} °C</td>
                            </tr>
                            <tr>
                                <td>Humedad</td>
                                <td>{{$current["main"]->humidity}} %</td>
                            </tr>
                            <tr>
                                <td>Visibilidad</td>
                                <td>{{$current["visibility"]/1000}} km</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Map/City -->
                <div class="col-md-6">
                    <img src="img/mx.jpeg" alt="Imagen" class="img-fluid1 rounded img-map">
                    <p class="text-muted1 mt-2 text-end fw-lighter text-last-updated">
                        Última actualización: {{$current["time"]}}
                    </p>
                </div>
            </div>
            <hr>
        </section>

        <!-- Hour -->
        <section class="container pb-4">
            <p class="h5">Pronóstico por Hora</p>

            <div class="vertical-scroll py-4">
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </section>

        <!-- Weekkly -->
        <section class="container">
            <p class="h5">Pronóstico Semanal</p>
            <!-- scroll -->
            <div class="horizontal-scroll  py-4">

                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
            </div>
        </section>
        <br>
        <br>
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>