<?php

include ("conexion.php");

if (isset($_POST['SERIE']) && !empty($_POST['SERIE']))
{


$serie = $_POST["SERIE"];
$temperatura = $_POST["TEMPERATURA"];
$humedad = $_POST["HUMEDAD"];
$luz = $_POST["LUZ"];


//parse_str($REPORTE);

$con = mysql_connect ($host, $user, $pw)
or die ("Pro_server");
       
mysql_select_db ($db,$con)
or die ("pro_select_db");



mysql_query("INSERT INTO reportes (serie,temperatura,humedad,luz,hora,fecha) VALUES ('$serie','$temperatura','$humedad','$luz',CURTIME(),CURDATE())", $con) or die ("pro_insert_db");


echo "Registro Correcto";

}

else {echo "datosIncorrectos";}
   
?>