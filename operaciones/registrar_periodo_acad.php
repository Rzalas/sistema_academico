<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$nombre= $_POST['nombre'];
$fecha_inicio= $_POST['fecha_inicio'];
$fecha_fin= $_POST['fecha_fin'];
$director= $_POST['director'];
$fecha_actas= $_POST['fecha_actas'];

$b_periodo_academico = buscarPeriodoAcademico($conexion, $nombre);
$c_r_b_periodo_academico= mysqli_num_rows($b_periodo_academico);
if ($c_r_b_periodo_academico == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO periodo_academico(nombre, fecha_inicio,fecha_fin, director,fecha_actas) VALUES ('$nombre','$fecha_inicio','$fecha_fin','$director','$fecha_actas')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_periodo_academico = buscarPeriodoAcademico($conexion, $nombre);
	$res_b_periodo_academico = mysqli_fetch_array($b_id_periodo_academico);



	// registrar usuario
	if ($insertar) {
		echo "<script>
                alert('Registro Exitoso periodo academico');
                window.location= '../periodo_academico.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar periodo academico');
			window.history.back();
			</script>
			";
	}

}