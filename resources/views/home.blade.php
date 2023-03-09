<!DOCTYPE html>
<html lang="es">
<head>
    <title>My Weather App</title>
    @include("shared.header")
</head>

<body>
    <div id="app1" class="main">
        <!-- Brand -->
        <main class="container text-center">
            @include("shared.navbar")
            <div class="mt-5 spinner-border mt-5" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </main>
        <br>


        @include("shared.footer")
    </div>
    <style>
        .toastjs {
            color: #ffb703 !important;
        }

        main {
            min-height: 85vh;
        }
    </style>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        function GetCurrentWeather(loc) {
            let pos = loc.coords;
            // Change window
            var url = `city?lat=${pos.latitude}&lon=${pos.longitude}&state=-`;
            window.location.href = url;
            return;
        }

        function Error(err) {
            console.error(err.code);
            if (err.code == 1) // PERMISSION_DENIED
            {
                message = "PERMISO DENEGADO POR EL USUARIO"
            } else if (err.code == 2) // POSITION_UNAVAILABLE
            {
                message = "NO SE PUDO OBTENER LA UBICACIÓN"
            } else //TIMEOUT
            {
                message = "TIEMPO DE ESPERA SUPERADO"
            }
            new Toast({
                message,
                type: "warning"
            });
        };

        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        }
        navigator.geolocation.getCurrentPosition(GetCurrentWeather, Error, options);
    </script>
</body>

</html>