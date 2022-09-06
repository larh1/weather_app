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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
                    <div class="map-responsive">
                        <iframe src="https://maps.google.com/maps?q={{$lat}},{{$lon}}&t=&z=13&ie=UTF8&iwloc=&output=embed" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
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
            <div class="text-center">
                <div id="spin" class="spinner-border mt-5" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="vertical-scroll py-4" id="div_hour">
            </div>
            <hr>
        </section>

        <!-- Weekkly -->
        <section class="container">
            <p class="h5">Pronóstico Semanal *</p>
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
            <p class="text-muted1 mt-2 text-end fw-lighter text-last-updated">
                * Datos de ejemplo
            </p>
        </section>
        <br>
        <br>
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#spin").show();
            var url = "hour?lat={{$lat}}&lon={{$lon}}";
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(data) {
                    data.list.forEach(e => {
                        var min = e.main.temp_min;
                        var max = e.main.temp_max;
                        var date = new Date(e.dt * 1000);;
                        var time = date.getHours() + ":00";
                        var aux_desc = e.weather[0].description;
                        var desc = aux_desc.charAt(0).toUpperCase() + aux_desc.slice(1);
                        var img = `http://openweathermap.org/img/wn/${e.weather[0].icon}@4x.png`;
                        var s = `<div class="card-hour desc-hour my-2"> <p class="hour-desc">
                            <img src="${img}" alt="img" height="60" class="ms-2">
                            <span class="ms-3">${time}</span>
                            <span class="ms-3">${desc}</span>
                            <span class="ms-3">${min} °C /${max} °C</span>
                            </p></div`;
                        $("#div_hour").append(s);
                    });
                    // Hide spinner
                    $("#spin").hide();
                },
                error: function() {
                    alert("Error")
                    console.log("ERROR", data);
                }
            });
        });
    </script>

</body>

</html>