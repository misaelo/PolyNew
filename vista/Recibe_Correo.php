<?php

$correo_llegan = 'info@polysport.cl';
$nombre_correo = $_POST['nombre_correo'];
$email_correo = $_POST['email_correo'];
$asunto_correo = $_POST['asunto_correo'];
$texto_correo = $_POST['texto_correo'];

$info = 'Desde: '.$email_correo." Nombre del Contacto ".$nombre_correo." .";

mail($correo_llegan, $asunto_correo, $texto_correo, $info);



echo json_encode($correo_llegan);


 ?>
