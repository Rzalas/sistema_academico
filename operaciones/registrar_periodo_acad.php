<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$nom= $_POST['nom'];
$fecha_inicio= $_POST['fecha_inicio'];
$fecha_fin= $_POST['fecha_fin'];
$director= $_POST['director'];
$fecha_actas= $_POST['fecha_actas'];

$b_nom = buscarPeriodoAcademico($conexion, $nom);
$c_r_b_nom= mysqli_num_rows($b_nom);
if ($c_r_b_nom == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO periodo_academico(nom, fecha_inicio,fecha_fin, director,fecha_actas) VALUES ('$nom','$fecha_inicio','$fecha_fin','$director','$fecha_actas')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_nom = buscarPeriodoAcademico($conexion, $nom);
	$res_b_nom = mysqli_fetch_array($b_id_nom);

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