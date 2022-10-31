<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>TP Modul 2</title>
</head>

<!-- NAVBAR START -->
<body>
<body style="background-color:#F5F5F5; ">
    <nav class="navbar-light fixed-top " style="background-color:#00ABB3;" >
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h5 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Home.php">
            Home
          </a>
            </h5>
        </li>
        <li class="nav-item ">
            <h5 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="TPLBOOK.php">
            Booking
          </a>
          </h5>
        </li>
      </ul>
    </nav>
    <br>
    <br>
    <br>
    <!-- NAVBAR END -->

    <!-- TITLE START -->
    <div class = "container style="text-align: center; padding-top: 0.10cm;">

      <div class="class text-center mb-5 text-primary">
        <h3 style="text-align:center;color:#002E94">
            <b>WELCOME TO EAD RENT
            </b>
        </h3>
        <p  style="text-align:center;color:#5F9DF7">
        <b>Find your the best car deal, here!
        </b> 
        </p>
    <!-- TITLE END -->

    <!-- MENU START -->
      </div>
      <div class="container mt-5">
        <div class="card-deck">
          <div class="card text-center" style="width: 15rem;">
            <img src="BMW.jpg" class="card-img-top" style="height: 15rem;">

            <div class="card-body" style="text-align:left">
              <h5 class="card-title">BMW E46
              </h5>
              <p>
                  <b class="card-title" style="color: red">Rp 750.000 /day
                  </b>
              </p>

              <br>
            </br>
                <div class="card-text" style="text-align:center"> 
                <ul class="list-group list-group-flush">
                    <div class="list-group-item" style="color: black;"> 
                        <b>
                        4 kursi
                        </b>
                    </div>
                    <li class="list-group-item" style="color: black;">
                        <b>
                        1200 CC
                        </b>
                    </li>
                    <li class="list-group-item" style="color: black;">
                        <b>
                        Automatic
                        </b>
                    </li>
                    <li class="list-group-item">
                    </li> 
                </div>
            </div>

            <div class="card-footer text-center">
              <a href="TPLBOOK.php?type=BMW&gambar=BMW.jpg" class="btn btn-primary form-control">
                  <b>
                  Book Now
                  </b>
              </a>
              
            </div>
            </ul>
          </div>

          <div class="card text-center" style="width: 15rem;">
            <img src="MERCY.jpg" class="card-img-top" style="height: 15rem;">
            <div class="card-body" style="text-align:left">
              
            <h5 class="card-title"> 
              Mercedes Benz
            </h5>
              <p class="card-title" style="color: red">
                  <b>
                  Rp 1.200.000 /day
                  </b>
              </p> 
              <br>
            </br>

                <div class="card-text" style="text-align:center"> 
                <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: black;">
                <b>
                4 kursi
                </b>
                </li>
                
                <li class="list-group-item" style="color: black;">
                <b>
                2000 CC
                </b>
                </li>
                  
                <li class="list-group-item" style="color: black;">
                <b>
                Automatic
                </b>
                </li>
                  
                <li class="list-group-item">
                </li>
                  </div>
            </div>
            
            <div class="card-footer text-center">
              <a href="TPLBOOK.php?type=MERCY&gambar=MERCY.jpg" class="btn btn-primary form-control">
                  <b>
                  Book Now
                  </b>
              </a>
              
            </div>

          </div>
            
            <div class="card text-center" style="width: 15rem;">
            <img src="SCIROCO.jpg" class="card-img-top" style="height: 15rem;">
            <div class="card-body" style="text-align:left">
              
            <h5 class="card-title">
            Sciroco
            </h5>

            <p class="card-title" style="color: red">
                <b>
                  Rp 1.500.000 /day
                </b>
            </p> 

            <br>
        </br>

            <div class="card-text" style="text-align:center"> 
            
            <ul class="list-group list-group-flush">
            
            <li class="list-group-item" style="color:black;">
            <b>
                2 kursi
            </b>
            </li>

            <li class="list-group-item" style="color:black;">
            <b>
                2000 CC
            </b>
            </li>

            <li class="list-group-item" style="color: black;">
                <b>
                Automatic
                </b>
                </li>
                  
                <li class="list-group-item">
                </li>
                  </div>
            </div>

            <div class="card-footer text-center">
              <a href="TPLBOOK.php?type=Sciroco&gambar=SCIROCO.jpg" class="btn btn-primary form-control">
                  <b>
                  Book Now
                  </b>
              </a>
              
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- MENU END -->

    <br>
    <br>
    <br>
    <footer class="bg-light text-center text-lg-start fixed-bottom">
  <div class="text-center p-2" style="background-color:#00ABB3">
  <h6 style="text-align: center;color:antiquewhite">
    Alif Fajar Maulana_1202200139
  </div>
</footer>
</body>
</html>