<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$codigo     = $_POST['codigo'];
$tipo       = $_POST['tipo'];
$nombre     = $_POST['nombre'];
$resolucion = $_POST['resolucion'];

$b_codigo = buscarProgramaEstudio($conexion, $codigo);
$c_r_b_codigo = mysqli_num_rows($b_codigo);
if ($c_r_b_programa_estudios == 0) {
	$insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$codigo','$tipo','$nombre', '$resolucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	


	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso programa de estudios');
                window.location= '../programa_estudios.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al programa de estudios');
			window.history.back();
			</script>
			";
	}
}


?>