<?php


// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contacto@magomarcelolopez.cl";
$email_subject = "[Contacto] ". $_POST['nombre'] . " ".$_POST['correo'];

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['correo']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Correo: " . $_POST['correo'] . "\n";
$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
$email_message .= "Telefono:" . $_POST['telefono'] ."\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'De: '.$_POST['nombre']."\r\n".
'Para: '.$_POST['nombre']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

header("location:contacto.php?code=j7w!jweg!zq");

?>
