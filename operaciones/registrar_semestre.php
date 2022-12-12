<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion= $_POST['descripcion'];

$b_descripcion = buscarSemestre($conexion, $descripcion);
$c_r_b_descripcion = mysqli_num_rows($b_descripcion);
if ($c_r_b_semestre == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO semestre (descripcion) VALUES ('$descripcion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_descripcion = buscarSemestre($conexion, $descripcion);
	$res_b_descripcion = mysqli_fetch_array( $b_id_descripcion);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso semestre');
                window.location= '../semestre.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al semestre');
			window.history.back();
			</script>
			";
	}

}


?>