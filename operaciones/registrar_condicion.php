<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descrip= $_POST['descripcion'];
$codigo= $_POST['codigo'];

$b_descripcion = buscarCondicion($conexion, $descrip);
$c_r_b_descripcion = mysqli_num_rows($b_descripcion);
if ($c_r_b_cargo == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO condicion (descripcion,codigo) VALUES ('$descrip','$codigo')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_descripcion = buscarCondicion($conexion, $descrip);
	$res_b_descripcion = mysqli_fetch_array( $b_id_descripcion);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso condicion');
                window.location= '../condicion.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error condicion');
			window.history.back();
			</script>
			";
	}

}