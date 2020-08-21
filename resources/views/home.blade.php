
@extends('layouts.app')
@section('content')


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<body background="http://localhost/barespel/resources/views/img/fondo2.jpg" style="width:100%;height:100vh;background-size:cover;background-position:center;">






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class=""></div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}hola
                        </div>
                    @endif

                   <div class="container" >
  <br><br><br>
  <div style="background-color: rgba(247, 251, 225, 0.8)">
  <div class="text-center row row-cols-3" >
    <div class="col"><b>CAMPUS</b> <div class="col"><a href="{{route('campuses.index')}}"><img src="http://localhost/barespel/resources/views/img/campus.png" width="45%" alt="campus" /></a></div></div>
    <div class="col"> <b>BARES</b> <div class="col"><a href="{{route('bars.index')}}"><img src="http://localhost/barespel/resources/views/img/bar.png" width="45%" alt="bar" /></a></div></div>
    <div class="col"> <b>MENUS </b><div class="col"><a href="{{route('menus.index')}}"><img src="http://localhost/barespel/resources/views/img/menu.png" width="45%" alt="menu" /></a></div></div>
    <div class="col"><b>SNACK </b><div class="col"><a href="{{route('snacks.index')}}"><img src="http://localhost/barespel/resources/views/img/snack.png" width="45%" alt="snack" /></a></div></div>
    <div class="col"><b>BUZON  </b><div class="col"><a href="{{route('buzons.index')}}"><img src="http://localhost/barespel/resources/views/img/buzon.png" width="45%" alt="buzon" /></a></div></div>
    <div class="col"> <b>PREFERENCIAS</b><div class="col"><a href="{{route('preferencias.index')}}"><img src="http://localhost/barespel/resources/views/img/preferencias.png" width="45%" alt="preferencias" /></a></div></div>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


      <header>
         <label class="labelMenu"><i class="fa fa-bars"></i></label>      
      </header>
    
    <div class="menu">
      <h1><i class="fa fa-address-card"></i></h1>
      <nav>
        <ul>
          <a href="">
            <li class="icone1"><i class="fa fa-adjust"></i></li>
            <li>acessibilidade</li>
          </a>
          
          <a href="">
            <li class="icone2"><i class="fa fa-envelope"></i></li>
            <li>Menssagens</li>
          </a>
          
          <a href="">
            <li class="icone3"><i class="fa fa-book"></i></li>
            <li>Anotações</li>
          </a>
          
          <a href="">
            <li class="icone4"><i class="fa fa-box"></i></li>
            <li>Estoque</li>
          </a>
        </ul>
        
        <ul>
          <a href="">
            <li class="icone5"><i class="fa fa-lightbulb"></i></li>
            <li>Ajuda</li>
          </a>
          
          <a href="">
            <li class="icone6"><i class="fa fa-cog"></i></li>
            <li>Configurações</li>
          </a>
          
          <a href="">
            <li class="icone7"><i class="fa fa-comment"></i></li>
            <li>Comentários</li>
          </a>
          
          <a href="">
            <li class="icone8"><i class="fa fa-angle-double-left"></i></li>
            <li>Sair</li>
          </a>
        </ul>
      </nav>
    </div>
    
    
    
    <div class="opacMenu"></div>
    
    <!--  Jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    
      $(document).ready
      (
        function()
        {
          $('.labelMenu').click
          (
            function()
            {
               $('.menu').css('left', 0);
               $('.opacMenu').fadeIn();
            }
          )
          
          $('.opacMenu').click
          (
            function()
            {
               $('.menu').css('left', '-205px');
               $('.opacMenu').fadeOut();
            }
          )
        }
      )
    </script>
  

<style>

*
{
  margin: 0; 
  padding: 0; 
  box-sizing: border-box; 
  font-family: 'Poppins', sans-serif; 
  /* Google Fonts: https://fonts.google.com/?selection.family=Poppins*/
  list-style: none;
}

a { text-decoration: none; }

header 
{
   padding: 15px; box-shadow: 2px 2px 1px #777;
}

header .labelMenu 
{ 
  color: #FFF; 
  tansition: all 0.2s; 
  width: 40px; 
  height: 40px; 
  display: inline-block;
  text-align: center;
  line-height: 40px;
  border-radius: 100px;
}

header .labelMenu:hover { background-color: #0099ff; cursor: pointer;  }

/* NAVGATION: */

.menu 
{
  position: fixed;
  top: 0; left: -205px; bottom: 0;
  min-width: 200px; max-width: 200px;
  min-height: 100vh; max-height: 100vh;
  background-color: #FAFAFA;
  box-shadow: 0 0 16px rgba(0, 0, 0, .28);
  transition: all 0.2s;
  z-index: 50;
}

.menu h1 
{
  background-color: #313a45;
  text-align: center;
  color: #DDD; 
  padding: 10px;
}

.menu ul a { display: flex; padding: 10px;  color: #444; transition: all 0.2s; }

.menu a:hover { background-color: #DDD; }

.menu ul:first-child { border-bottom: 1px solid #DDD; }
/* A primeira <ul> do menu (primeiro filho (first-child)) */

.menu ul a li:first-child { margin-right: 10px; }

/* A primeira <li> de cada <ul> do menu (primeiro filho (first-child)) (Icones) */

/* Cores Icones */

.menu ul a .icone2 { color: #ff9933; }
.menu ul a .icone3 { color: #6666cc; }
.menu ul a .icone4 { color: #663300; }

.menu ul:last-child a:hover li:first-child { color: #222; }

/* Na ultima <ul>, quando o mouse passas sobre os links de cada uma, a primeira <li> muda a cor para um cinza mais escuro */


/* Opacidade quando o menu é aberto */

.opacMenu
{
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100vh;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 40; 
}


p 
{
  text-align: center; padding: 40px; color: #DDD; font-size: 50px; text-shadow: 1px 1px 1px #222;
}


</style>


    






