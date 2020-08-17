<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
          
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
   
    <body style="background-color: rgb(234, 234, 234)" >
    <nav class="navbar navbar-expand-lg   sticky-top navbar-light bg-light" >

  <img src="http://localhost/barespel/resources/views/img/sello2.png"  width="40" height="40" class="d-inline-block align-top" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    
      <li class="nav-item">
        <a class="nav-link" href="{{route('buzons.index')}}">Buzon</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('preferencias.index')}}">Preferencias</a>
      </li>
      <li> <form class="form-inline my-2 my-lg-0">
    @if (Route::has('login'))
                <div class="top-right links" >
              
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
    </form></li>
    </ul>
    
  </div>
</nav>
<br> <br> 
<div class="content"  style="background-color: rgb(234, 234, 234)">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/barespel/resources/views/img/belisario22.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/barespel/resources/views/img/matrizespe.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
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
</div>
    
    
  
    
    </div>
  </div>
  <br><br>
  <div class="container"  >
  <div class="row" >
  
    <div class="w-100"></div>
    <div class="col-sm card" ><div class="table-responsive">
  <table class="table" > 
  <h1 class=" display-3 font-weight-bold border text-center">Menus</h1>
  <thead class="table-primary" >
                        <tr>                           
                            <td>CAMPUS</td>
                            
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                    <h1>Bar 1</h1>
                    @foreach($menus as $menu)
                    
                    @if($menu->bar->nombre == "Bar 1" )
                    <tr>                          
                         <td><p class="card-text">{{$menu->bar->campus->nombre}} </p></td>  
                         
                         <td><p class="card-text">{{$menu->nombre}}</p></td>  
                         <td><p class="card-text">{{$menu->precio}}$</p></td> 
                         <br> 
                     </tr>
                     @endif
                     @endforeach
                     </tbody>
                     <table class="table" > 
  
  <thead class="table-primary" >
                        <tr>                           
                            <td>CAMPUS</td>
                            
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                    <h1>Bar 2</h1>
                    @foreach($menus as $menu)
                    @if($menu->bar->nombre == "Bar 2")
                    <tr>                          
                         <td><p class="card-text">{{$menu->bar->campus->nombre}} </p></td>  
                         
                         <td><p class="card-text">{{$menu->nombre}}</p></td>  
                         <td><p class="card-text">{{$menu->precio}}$</p></td> 
                         <br> 
                     </tr>
                     @endif
                     @endforeach
                     </tbody>
  </table>
  </table>
</div></div>
    <div class="col-sm card" ><div class="table-responsive">
  <table class="table">
  <h1 class=" display-3 font-weight-bold border text-center">Snacks</h1>
  <thead class="table-primary">
                        <tr>                           
                            
                        <td>CAMPUS</td>
                            <td>BAR</td>
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                   
                    <?php $count = 0;?>                
                   
   
                    @foreach($snacks as $snack)
                    @if($count< 4)
                    
                    
                    
                    <tr>                          
                         <td><p class="card-text">{{$snack->bar->campus->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->bar->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->precio}}$</p></td> 
                          <br>
                                 
                      </tr>
                      @endif
                      <?php $count++;?> 
                      
                      
                     @endforeach
                     
                     </tbody>
                      
                     
  </table>
  <!-- Button trigger modal -->
  <div class="container">
  <div class="row">
    <div class="col text-center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ver mas..
</button>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Snacks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <div class="col card"><div class="table-responsive">
  <table class="table">
  <thead class="table-primary">
                        <tr>                           
                            
                        <td>CAMPUS</td>
                            <td>BAR</td>
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                    @foreach($snacks as $snack)
                    <tr> 
                   
                    <tr>                          
                         <td><p class="card-text">{{$snack->bar->campus->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->bar->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->nombre}} </p></td>  
                          <td><p class="card-text">{{$snack->precio}}$</p></td> 
                          <br>
                     
                             
                      </tr>
               
                      
                     @endforeach
                     </tbody>
                     
  </table>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div></div>
  </div>
</div>

  
            
        </div>
  
</div>
<br><br>
<!-- imagen -->
<div><img src="http://localhost/barespel/resources/views/img/barra2.png"  class="img-fluid" alt="vcvbcbv"></div>
<br>
               
       <div style="background-color: white">
       <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="http://localhost/barespel/resources/views/img/snack22.jpg" width="20px"  height="165px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Snacks</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="http://localhost/barespel/resources/views/img/comida.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Menus</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bar Espel</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
  </div>
</div>
       
       
       </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
