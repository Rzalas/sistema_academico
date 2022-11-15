<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descrip= $_POST['descripcion'];

$b_descripcion = buscarCargo($conexion, $descrip);
$c_r_b_descripcion = mysqli_num_rows($b_descripcion);
if ($c_r_b_cargo == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO cargo (descripcion) VALUES ('$descrip')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_descripcion = buscarCargo($conexion, $descrip);
	$res_b_descripcion = mysqli_fetch_array( $b_id_descripcion);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso cargo');
                window.location= '../cargo.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al cargo');
			window.history.back();
			</script>
			";
	}

}


?>