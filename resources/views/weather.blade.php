<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Weather App - Local</title>
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
        @include("shared.navbar")
        <br>

        <!-- Current -->
        <section class="container pb-4">
            @include("weather.current")
        </section>

        <!-- Hour -->
        <section class="container pb-4">
            @include("weather.hour")
        </section>

        <!-- Weekkly -->
        <section class="container">
            @include("weather.week")
        </section>
        <br>
        <br>
        @include("shared.footer")
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        // Add records to Hour section
        function addHour(min, max, img, time, desc) {
            var s = `<div class="card-hour desc-hour my-2"> <p class="hour-desc">
                            <img src="${img}" alt="img" height="60" class="ms-2">
                            <span class="ms-3">${time}</span>
                            <span class="ms-3">${desc}</span>
                            <span class="ms-3">${min} °C /${max} °C</span>
                            </p></div`;
            $("#div_hour").append(s);
        }

        // Add records to Week section
        function addWeek(min, max, img, time, desc, day) {
            var w = `<div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">${day}</p>
                    <img src="${img}" width="60%" alt="Sem1" class="img-fluid">
                    <p class="mt-2 fw-bold">${min}°C / ${max}°C </p>
                    <p class="desc mt-4">${desc}</p>
                </div>`;
            $("#div_week").append(w);
        }

        $(document).ready(function() {
            $("#spin").show();
            var url = "hour?lat={{$lat}}&lon={{$lon}}";
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(data) {
                    var days = ["Lunes", "Martes", "Miércoles", "Jueves",
                        "Viernes", "Sábado", "Domingo"
                    ];
                    var i = 0;
                    data.list.forEach(e => {
                        if (i == 7) i = 0; //Reset day
                        var min = e.main.temp_min;
                        var max = e.main.temp_max;
                        var date = new Date(e.dt * 1000);;
                        var time = date.getHours() + ":00";
                        var aux_desc = e.weather[0].description;
                        var desc = aux_desc.charAt(0).toUpperCase() + aux_desc.slice(1);
                        var img = `http://openweathermap.org/img/wn/${e.weather[0].icon}@4x.png`;
                        addHour(min, max, img, time, desc);
                        addWeek(min, max, img, time, desc, days[i]);
                        i++;
                    });
                    // Hide spinner
                    $("#spinHour").hide();
                    $("#spinWeek").hide();
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