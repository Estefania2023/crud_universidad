<?php

include 'Conexion.php';
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Docente = $_POST['Docente'];
$Asignatura = $_POST['Asignatura'];
$Edad = $_POST['Edad'];
$Email = $_POST['Email'];


$sql = "INSERT INTO estudiante (Nombre,Apellido,Docente,Asignatura,Edad,Email) VALUES( '$Nombre', '$Apellido',$Docente','$Asignatura','$Edad','$Email')";


$resultado = mysqli_query($conn, $sql);

if ($resultado === TRUE) {
    header("location:Index.php");
} else {
    echo "Datos NO insertados";
}
