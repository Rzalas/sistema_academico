<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$codigo = $_POST['codigo'];


$sql = "UPDATE condicion SET descripcion='$descripcion', codigo='$codigo' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../condicion.php';
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