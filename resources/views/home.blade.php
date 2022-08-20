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
    <div id="app" class="main bg-purple">

        <!-- Brand -->
        <main class="container">
            <nav class="navbar navbar-dark bg-purple">
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
                        <div class="form-check-inline d-flex">
                            <input type="text" class="form-control" placeholder="Buscar ciudad">
                            <button class="btn btn-dark btn-purple ms-3 asd">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </main>
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>