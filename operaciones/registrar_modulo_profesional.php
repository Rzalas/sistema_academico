<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$descrip     = $_POST['descripcion'];
$nro       = $_POST['nro_modulo'];
$prograes = $_POST['id_programa_estudio'];

$b_descrip = buscarModuloProfesional($conexion, $descrip);
$c_r_b_descrip= mysqli_num_rows($b_descrip);
if ($c_r_b_programa_estudios == 0) {
	$insertar = "INSERT INTO modulo_profesional (descripcion, nro_modulo, id_programa_estudio) VALUES ('$descrip','$nro','$prograes')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	


	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso programa de estudio');
                window.location= '../modulo_formativo.php'
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