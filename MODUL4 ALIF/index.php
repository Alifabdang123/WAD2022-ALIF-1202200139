<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <?
    $img = array(
        "./img/mobil.png"
    );
  ?>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
            <a class="nav-link active" aria-current="page" href="Login-Alif.php">Login</a>
      </form>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <!-- jumbotron -->
    <div class="container p-5">
        <div class="row vh-100 align-items-center">

            <!-- COLOM 1 -->
            <div class="col">
                <h2>Selamat datang di showroom Alif</h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias unde quae repudiandae minus non, obcaecati quaerat blanditiis ab quod eius, laudantium dolorem facere placeat sunt! Nobis vitae corporis sit?</p>
                <!-- btn -->
                <!-- end btn -->
                <div class="d-flex justify-content-start">
                    <div class="row mt-5">
                        <div class="col">
                            <img src="asset/logo-ead.jpg" style="width: 68px;" alt="">
                        </div>
                        <div class="col">
                            <p>Alif_1202200139</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <img src="BMW.jpg" style="width: 480px" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>