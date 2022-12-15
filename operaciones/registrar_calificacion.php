<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$matri= $_POST['id_periodo_acad'];
$prograestud= $_POST['id_programa_estudio'];
$semest= $_POST['id_semestre'];
$prograu= $_POST['id_programacion_ud'];
$estudian= $_POST['id_estudiante'];
$fech= $_POST['fecha_reg'];
echo "hola";
$b_matri= buscarMatriculaById($conexion, $matri);
$c_r_b_matri= mysqli_num_rows($b_matri);
if ($c_r_b_matri== 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO matricula (id_periodo_acad,id_programa_estudio,id_semestre,id_programacion_ud,id_estudiante,fecha_reg) VALUES ('$matri','$prograestud','$semest','$prograu','$estudian','$fech')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso matricula');
                window.location= '../matricula.php'
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