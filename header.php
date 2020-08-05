<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">



<div class="wrapper row0">
  <div id="topbar" class="clear">
    <div class="fl_left">
      <ul class="faico clear">
        <li><a href="http://fb.com/magomarcelolopez"><i class="fa fa-facebook"></i></a></li>
        <li><a href="http://instagram.com/magomarcelolopez"><i class="fa fa-instagram"></i></a></li>

      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="logo" class="">
      <center>
        <h1 class="titulo-inicial">Mago Marcelo López <i class="fa fa-magic"></i>
        </h1>
        </center>


    </div>
  </header>
</div>
</div>
<div class="wrapper row2">
<center>
  <div class="spacer">
    <nav id="mainav" class="clear">
      <ul class="clear">
        <!-- INICIO -->
        <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "index.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo ' <li class="active"><a style="text-decoration:none;" href="index.php">Inicio</a></li>';
          }
          else{
            echo ' <li class=""><a style="text-decoration:none;" href="index.php">Inicio</a></li>';
          }
        ?>
        <!-- INICIO -->

        <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "infantil.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo ' <li class="active"><a style="text-decoration:none;"href="infantil.php">Show Infantil</a></li>';
          }
          else{
            echo ' <li class="showinfantil"><a style="text-decoration:none;" href="infantil.php">Show Infantil</a></li>';
          }
        ?>

         <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "closeup.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo ' <li class="active"><a style="text-decoration:none;"href="closeup.php">Magia Close Up</a></li>';
          }
          else{
            echo ' <li class="showcloseup"><a style="text-decoration:none;"href="closeup.php">Magia Close Up</a></li>';
          }
        ?>



        <!-- GALERIA -->
       

        <!-- GALERIA -->
        <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "acerca.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo '<li class="active"><a class="" style="text-decoration:none;"href="acerca.php">Sobre Mi</a>
                  </li>';
          }
          else{
            echo '<li><a style="text-decoration:none;"href="acerca.php">Sobre Mi</a>
                  </li>';
          }
        ?>


        <!-- HORA MAGICA -->
         <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "programa.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo ' <li class="active"><a style="text-decoration:none;"href="programa.php">Hora Mágica</a></li>';
          }
          else{
            echo ' <li class="horamagica" style="color: #36C07B;"><a style="text-decoration:none;"href="programa.php">Hora Mágica</a></li>';
          }
        ?>
        <!-- HORA MAGICA -->


        <!-- CONTACTO -->
        <?php
          $url= $_SERVER['REQUEST_URI'];
          $find = "contacto.php";
          $result = strpos($url,$find);
          if($result != FALSE){
            echo '<li class="active"><a style="text-decoration:none;"href="contacto.php">Contacto</a></li>';
          }
          else{
            echo '<li><a style="text-decoration:none;"href="contacto.php">Contacto</a></li>';
          }
        ?>

        <!-- CONTACTO -->

      </ul>
    </nav>
  </div>
</div>
