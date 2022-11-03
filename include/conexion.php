<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost","root","","sisacad_2");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>