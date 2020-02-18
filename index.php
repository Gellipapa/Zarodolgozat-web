<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand col-md-3" href="#">
  <img src="s.png"></img>
  Phoenix PC
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          
          Kategóriák
          <i class="fa fa-list"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
      </li>
    </ul>


    <div class="input-group input-group-lg">
        <div class="col-xs-12 input-group-lg">
            <input type="text" class="form-control kereso" placeholder="Keresés">
            </div>
            <div class="input-group-append">
                <button type="button" class="btn btn-secondary kereso kek">
                    <i class="fa fa-search"></i>
                </button>
            </div>
    </div>

<button type="button" class="btn btn-primary"><i class="fa fa-heart"></i></button>
<button type="button" class="btn btn-primary"><i class="fa fa-info-circle"></i></button>
<button type="button" class="btn btn-primary"><i class="fa fa-male"></i></button>
<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
  </div>
</nav>
      
 

        
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
  <div class="carousel-inner">
    <div class="carousel-item active">
       
        <img class="d-block w-100" src="apple.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    <h5>Üdv a weboldalon!</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="motherboard.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
    <h5>Üdv a weboldalon!</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="video2.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
    <h5>Üdv a weboldalon!</h5>
    <p>...</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        <script>
        
        $('.carousel').carousel({
  interval: 2000
})
        
        </script>



<!-- Footer -->
<footer class="page-footer navbar-dark bg-dark pt-4">

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center justify-content-center">
    <li class="list-inline-item">
      <h3 class="mb-1">Íratkozz fel a hírleveleinkre!</h3>
    </li>
    <div class="row">
    <li class="list-inline-item text-center col text-center" >
      <a href="#!" class="btn btn-danger">Feliratkozok!</a>
    </li>
</div>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fa fa-facebook"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fa fa-google-plus"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fa fa-youtube"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a> Designed by Gellért Horváth</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

        

    </body>
</html>
