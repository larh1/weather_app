<main class="container">
    <nav class="navbar navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/" style="font-size: 28px;">
                <img src="img/weather.png" alt="Logo" height="52" class="d-inline-block align-text-bottom">
                {{config("app.name")}}
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