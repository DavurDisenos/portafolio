<?php
/**
* Author: Luis Zuno
* Email: luis@luiszuno.com
* URL: http://www.luiszuno.com
* Version: 1.0.0 
**/

//vars
$subject = $_POST['davur.garcia@gmail.com'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "Nombre: "  .$_POST['name']    ."<br>\n";
$msg .= "EmailL: "  .$_POST['email']    ."<br>\n";
$msg .= "Sitio web: "  .$_POST['web']    ."<br>\n";
$msg .= "Comentarios: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
