<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title>Mago Marcelo López - Contacto</title>

<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript">
	function cambio(){
		var boton = document.getElementById('boton');
		boton.src = "images/trebol.png";
	}
	function vuelta(){
		var boton = document.getElementById('boton');
		boton.src = "images/picas.png";
	}
	function ok(){
		var a = document.getElementById('nombre').value;
		var b = document.getElementById('correo').value;
		var c = document.getElementById('mensaje').value;
		var d = document.getElementById('asunto').value;
		var e = document.getElementById('telefono').value;
		if(b.indexOf('@')!=-1&&b.indexOf('.')!=-1){
			if(a!=""&&b!=""&&c!=""&&d!=""&&e!=""){
				alert ("El Mensaje se Ha Enviado!");
			}
		}
	}
</script>

</head>
<body id="top" class="bgded fixed" style="
background-image: url('images/598589.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; " oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<?php
include("header.php");
?>


<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
        <h1 style="color:#2e7bff">Formulario de Contacto </h1><br>

	     <form action="correo.php" method="post" style="color: black"><br>
				<div class="row">
		     	<div class="col-md-2"></div>
					<div class="col-md-4 input-group">
						<i class="input-group-addon fa fa-user" aria-hidden="true"></i>
						<input id ="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre" required="">
					</div>
					<div class="col-md-4 input-group">
						<span class="input-group-addon" id="sizing-addon2">@</span>
		     		<input id ="correo" name="correo" class="form-control" type="email" placeholder="Correo Electrónico" required="">
					</div>
					<div class="col-md-2"></div>
				</div><br>
				<div class="row">
		     	<div class="col-md-2"></div>
					<div class="col-md-4 input-group">
						<i class="input-group-addon fa fa-phone" aria-hidden="true"></i>
						<input id ="telefono" name="telefono" class="form-control" type="text" placeholder="+56912345678" required="">
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
		     		<input id="asunto" name="asunto" class="form-control" type="text" placeholder="Asunto" required="">
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
		     		<textarea id ="mensaje" style="resize:none" rows="10" maxlength="1500" name="mensaje" class="form-control" placeholder="Escriba su Mensaje" required=""></textarea>
					</div>
					<div class="col-md-2"></div>
				</div><br><br>
	     	<center>
	     		<?php if(isset($_GET['code'])&&($_GET['code']=='j7w!jweg!zq')) { ?>  
	     		<div class="success">Mensaje Enviado Correctamente, Responderemos en Breve</div>
	     		<?php } else {?>
	     		<input onclick="ok()" type="image" id="boton" onmouseover="cambio()" onmouseout="vuelta()" name="text-form" src="images/picas.png" />
	     		<?php } ?>
	     </form>
	 </div>
	     <br> <br> <br> <br> <br> <br> <br>

	    </main>
	  </div>
	</div>



<?php
include("footer.php");
?>
