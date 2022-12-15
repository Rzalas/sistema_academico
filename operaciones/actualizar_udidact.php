<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_modulo = $_POST['id_modulo'];
$id_semestre = $_POST['id_semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];

$sql = "UPDATE unidad_didactica SET descripcion='$descripcion', id_programa_estudio='$id_programa_estudio', id_modulo='$id_modulo', id_semestre='$id_semestre', creditos='$creditos', horas='$horas', tipo='$tipo', orden='$orden'WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../unidad_didactica.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>