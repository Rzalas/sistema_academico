<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion= $_POST['descripcion'];
$id_prog_estudi= $_POST['id_programa_estudio'];
$id_modulo= $_POST['id_modulo'];
$id_semestre= $_POST['id_semestre'];
$creditos= $_POST['creditos'];
$horas= $_POST['horas'];
$tipo= $_POST['tipo'];
$orden= $_POST['orden'];

$b_unidad_didactica = buscarUnidadDidactica($conexion, $descripcion);
$c_r_b_unidad_didactica = mysqli_num_rows($b_unidad_didactica);
if ($c_r_b_unidad_didactica == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio,id_modulo, id_semestre,creditos,horas,tipo,orden) VALUES ('$descripcion','$id_prog_estudi','$id_modulo','$id_semestre','$creditos','$horas','$tipo','$orden')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

    $b_id_unidad_didactica = buscarUnidadDidactica($conexion, $descripcion);
	$res_b_unidad_didactica = mysqli_fetch_array( $b_id_unidad_didactica);



	// registrar usuario
	if ($insertar ) {
		echo "<script>
                alert('Registro Exitoso unidad didactica');
                window.location= '../unidad_didactica.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al unidad didactica');
			window.history.back();
			</script>
			";
	}

}