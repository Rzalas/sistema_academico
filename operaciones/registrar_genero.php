<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$gener= $_POST['genero'];

$b_genero = buscarGenero($conexion, $gener);
$c_r_b_genero = mysqli_num_rows($b_genero);
if ($c_r_b_programa_estudios == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO genero (genero) VALUES ('$gener')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_genero = buscarGenero($conexion, $gener);
	$res_b_genero = mysqli_fetch_array( $b_id_genero);



	// registrar usuario
	if ($insertar) {
		echo "<script>
                alert('Registro Exitoso genero');
                window.location= '../genero.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al genero');
			window.history.back();
			</script>
			";
	}

}


?>