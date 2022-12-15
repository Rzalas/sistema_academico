<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$peri = $_POST['id_periodo_acad '];

$sql = "UPDATE presente_periodo_acad SET id_periodo_acad ='$peri' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../presente_per_acad.php';
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