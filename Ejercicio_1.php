<?php
echo "<b>Istituro Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Ever Tallacagua Quispe<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "---------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 1</h1><br>";
echo "Crear un arrerglo de notas con los siguientes elementos 65, 45, 75, 98 32 e imprimirlos.<br>";

//LLENADO DE ARREGLO DE NOTAS
$notas = array(65, 45, 75, 98, 32);

//IMPRIMIR LOS ELEMENTOS

echo 'Las notas son: <br>';
foreach ($notas as $n){
    print "[ $n ]";
}

?>