<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarDocentes($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscarDatosinstitucionales($conexion){
    $sql = "SELECT * FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
function buscarModuloProfesional($conexion){
    $sql = "SELECT * FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
function buscarUnidadDidactica($conexion){
    $sql = "SELECT * FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}
function buscarPresentePeriodoAcad($conexion){
    $sql = "SELECT * FROM presente_periodo_acad";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademico($conexion,){
    $sql = "SELECT * FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademicoByName($conexion,$nombre){
    $sql = "SELECT * FROM periodo_academico WHERE nombre='$nombre'";
    return mysqli_query($conexion, $sql);
}
function buscarProgramacionUniDidacti($conexion){
    $sql = "SELECT * FROM programacion_unidad_didactica";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocente($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioEstudiante($conexion){
    $sql = "SELECT * FROM usuarios_estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarCalificaciones($conexion){
    $sql = "SELECT * FROM calificaciones";
    return mysqli_query($conexion, $sql);
}
function buscarMatricula($conexion){
    $sql = "SELECT * FROM matricula";
    return mysqli_query($conexion, $sql);
}


?>