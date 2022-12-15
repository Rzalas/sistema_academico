<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$genero = $_POST['genero'];


$sql = "UPDATE genero SET genero='$genero'WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../genero.php';
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