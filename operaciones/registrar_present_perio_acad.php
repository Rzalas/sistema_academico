<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$presntepa= $_POST['id_periodo_acad'];

$b_presntepa = buscarPresentePeriodoAcad($conexion, $presntepa);
$c_r_b_presntepa = mysqli_num_rows($b_presntepa);
if ($c_r_b_id_programa_estudios == 0) {
	$insertar = "INSERT INTO presente_periodo_acad(id_periodo_acad) VALUES ('$presntepa')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    



	
	if ($insertar ) {
		echo "<script>
                alert('Registro de periodo academico Exitoso');
                window.location= '../presente_per_acad.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al Registrar periodo academico');
			window.history.back();
			</script>
			";
	}

}


?>