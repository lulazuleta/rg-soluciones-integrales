<?php
 
    
/* Enviar E-mail con Respuesta Automática 

*/ 

// Recibiendo los datos pasados por la pagina "form_contato.php" 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];
$para = 'lucia.lzuleta@gmail.com';


// Definiendo las cabeceras del e-mail 

$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$header .= 'From: Rg Soluciones Services <rgservices.soluciones@gmail.com>';

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 

// $para = "fededuran81@hotmail.com"; 

// Definiendo el aspecto del mensaje 

$msjCorreo = "\n\nNombre: $nombre\n Telefono: $tel\n E-Mail: $email\n Mensaje: $mensaje";


// Enviando el mensaje para el destinatario 


$envia =  mail($para, $titulo, $msjCorreo, $header); 



// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto. 

echo "Mensaje recibido con exito!"; 

echo "<meta http-equiv='refresh' content='2;URL=http://www.rgsolucionesservices.com.ar/'>"; 




     
 //   if(mail($para, $subject, $message, $header)) {
   //     echo "<p>Gracias por contactarnos, $name. Estaremos respondiendo su consulta a la brevedad.</p>";
    //} else {
   //     echo '<p>We are sorry but the email did not go through.</p>';
    //}
     
//} else {
  //  echo '<p>Algo salio mal.</p>';}
 
?>