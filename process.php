<?php 

        $mysqli= new mysqli("localhost", "root", "", "crud") or die(mysqli_error($mysqli));

if (isset($_POST ['save'])){

 $nombre = $_POST['nombre']; 
   $cedula = $_POST['cedula'];
   $boleto1 = $_POST['boleto1'];
   $boleto2 = $_POST['boleto2'];    

$mysqli->query("INSERT INTO data (nombre, cedula, boleto, vboleto) VALUES ('$nombre', '$cedula', '$boleto1', '$boleto2')") or
die($mysqli->error);

$destinatario = "777diegocaceres@gmail.com";
$asunto="Contacto desde Nuestra Web";

$carta="De: $nombre \n";
$carta .="Identificacion: $cedula \n";
$carta .="Numero de Boleto: $boleto1 \n"; 
$carta .="Verificacion de Boleto: $boleto2"; 

mail($destinatario, $asunto, $carta);
}


?>