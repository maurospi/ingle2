

<?php


$name=$_POST['name'];
$Email=$_POST['email'];
$message=$_POST['message'];


    
    $body .= "Nombre: " . $name . "\n"; 
    $body .= "Correo Electrónico: " . $Email . "\n\n";  
    $body .= "Mensaje: " . $message . "\n"; 

    //replace with your email
    mail("maurospinarev@gmail.com","Solicitud Contáctenos",$body); 

  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Tu mensaje ha sido enviado satisfactoriamente, muy pronto nos pondremos en contacto!!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index2.html"> 

</head>