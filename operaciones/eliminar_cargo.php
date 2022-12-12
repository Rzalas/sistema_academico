<?php
include "../include/conexion.php"; 
$descrip= $_GET['descripcion'];

$sql = "DELETE FROM cargo WHERE descripcion='$descrip'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('cargo Eliminado');
					window.location= '../cargo.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Eliminar cargo');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);

?>