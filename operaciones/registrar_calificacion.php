<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$idmatricula= $_POST['id_matricula'];
$nroalifi= $_POST['nro_calificacion'];
$califica= $_POST['calificacion'];
echo "hola";
$b_idmatricula= buscarCalificacionesByIdM($conexion,$idmatricula);
$c_r_b_idmatricula= mysqli_num_rows($b_idmatri);
if ($c_r_b_idmatricula== 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO calificaciones(id_matricula,nro_calificacion,calificacion) VALUES ('$idmatric','$nroalifi','$califica')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso calificacion');
                window.location= '../calificacion.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error matricula');
			window.history.back();
			</script>
			";
	}

}
?>