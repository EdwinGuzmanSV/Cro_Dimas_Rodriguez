@extends('layouts.app')
@section('content')
<div class="page-header text-center">
  <h2>Cooperativa Compañero Dimas Rodrigues de R.L <br><small><i><b>"Entre mas unidos, mas fuertes somos"</b></i></small></h2>
  <img src="img/logo.jpg" class="img-fluid" alt="Responsive image">
</div>
<div class="container" style="padding-left: 225px;">
    <div class="col justify-md-center">
       <div class="col col-lg-10" >
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/3.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-md-6">
  <h2 class="text-center">MISION<br><small><i><b>Ser una Empresa Cooperativa Financiera sostenible, competente y capaz de prestar servicios de calidad en El Salvador, los cuales permiten mejorar las condiciones de vida de su asociado y familia.</b></i></small></h2> 
    
  </div>
  <div class="col-md-6">
  <h2 class="text-center">VISION<br><small><i><b>Contribuir a la reinsercion social y productiva de los discapacitados y sus familias, promoviendo el desarrollo econonomico social de los mismos.</b></i></small></h2> 
  </div>
       </div>
    </div>
</div>
<br>
<br>
<!-- start footer-->
<div class="py-3 bg-dark" >
    <div class="col-md-12" style="background:green;">
      <div class="row">
        <div class="col-md-12 text-center"> <i class="d-block fa fa-stop-circle mb-3 text-muted fa-3x"></i>
          <p> <a href="https://goo.gl/maps/AUq7b9W7yYJ2" target="_blank" style="color:white;"> Urb. Nueva Metropolis, Calle Antigua Zacamil 115, <br>Mejicanos, San Salvador.</a> </p>
          <p> <a href="tel:2284-4687" style="color:white;">Telefax: (503) 2284-4687 y 2284-2017 </a> </p>
          <p class="mb-0"> <a href="mailto:info@pingendo.com" style="color:white;">cooperativadimasrodriguez@hotmail.com</a> </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center my-3"> <a href="https://www.facebook.com/coodimas/">
            <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center text-uppercase " style="color:white;">© 2019 Cro. Dimas Rodriguez Todos los derechos reservados</p>
          </div>
        </div>
      </div>
    </div>
<!-- end footer-->
@endsection