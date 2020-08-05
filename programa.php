<!DOCTYPE html>

<html>
<head>
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/stopvideo.js"></script>
<title>Mago Marcelo López | Hora Mágica </title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>
<body id="top" class="bgded fixed"  style="
background-image: url('images/598589.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; " oncontextmenu="return false" onselectstart="return false" ondragstart="return false">


<?php
  include("header.php");
  include("slider.php");

?>

<div class="caps wrapper row3" >
  <div class="caps horamagica-cap">
   <h2> Bienvenidos a Hora Mágica</h2>
  </div>
  

    <main class="caps container ">

      <div class="caps content" id="capitulos">
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-4 caps"><img width="60px" class="img-thumbnail" data-toggle="modal" onclick="video_fade_in(1)" data-target="#myModal1" src="images/screencaps/intro.png"></div>
           <div class="col-md-4 caps"><img width="60px" class="img-thumbnail" data-toggle="modal" onclick="video_fade_in(2)" data-target="#myModal2" src="images/screencaps/cap1.png"></div>
           <div class="col-md-2"></div>
        </div>

      </div>
  
       <!-- Modal --> <!-- INFORMACION -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Mano Mágica - Intruducción</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 video_programa" id="video1">
                  <!-- MATERIAL EN EL JS stopvieo.js -->
                </div>
              </div>
              
            </div>

            <div class="modal-footer">
              <button type="button" class="btn-celeste btn" data-dismiss="modal" onclick="video_fade_out(1)">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="myModal2" onhidden="alert(1)" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Mano Mágica - Introducción</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 video_programa" id="video2">
                <!-- MATERIAL EN EL JS STOP stopvideo.js --> 
                </div>
              </div>
              </div>

            <div class="modal-footer">
              <button type="button" class="btn-celeste btn" data-dismiss="modal" onclick="video_fade_out(2)">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
 
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<?php
  include("footer.php");
?>
