<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$descripcion    = $_POST['descripcion'];
$proes      = $_POST['id_programa_estudio'];
$modu   = $_POST['id_modulo'];
$semes = $_POST['id_semestre'];
$cred    = $_POST['creditos'];
$houra       = $_POST['horas'];
$tip    = $_POST['tipo'];
$rdn = $_POST['orden'];

$b_descripcion = buscarUnidadDidacticaByDescrip($conexion, $descripcion);
$c_r_b_descripcion = mysqli_num_rows($b_descripcion);
if ($c_r_b_descripcion == 0) {
	echo "hola";
	$insertar = "INSERT INTO unidad_didactica(descripcion,id_programa_estudio,id_modulo,id_semestre,creditos,horas,tipo,orden) VALUES ('$descripcion','$proes','$modu','$semes','$cred','$houra','$tip','$rdn')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	

	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso unidad didactica');
                window.location= '../unidad_didactica.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al programa de estudios');
			window.history.back();
			</script>
			";
		}
	}
?>