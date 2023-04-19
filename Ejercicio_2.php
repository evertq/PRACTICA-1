<?php
echo "<b>Istituro Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Ever Tallacagua Quispe<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "---------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 2</h1><br>";
echo "Crear un arreglo de estudiantes de TEW-500.<br>";

//LLENADO DE ARREGLO DE ESTUDIANTES
$estudiantes = array(
    "Boris Cristian",
    "Claudia Marisol",
    "Martin",
    "Jhessica",
    "Erika Amanda",
    "Joel",
    "Yola",
    "Juan Paul",
    "Rodrigo",
    "Luz Natalia",
    "Juan Ronaldo",
    "Rosse Mary",
    "Ever"
);

// IMPRIMIR LOS ELEMENTOS
echo 'Los estudiantes son: <br>';
foreach ($estudiantes as $e){
    print "[ $e ]";
}
?>