<?php
  include 'Conexion.php';

$nom = $_POST['nombreapellido'];
$marca = $_POST['edad'];
$precio = $_POST['email'];
$descripcion = $_POST['docente'];
$email = $_POST['programa'];

$sql = "INSERT INTO estudiantes(nombreapellido, edad,emailE,programaId,docenteId) 
VALUES('$nom','$marca','$precio','$descripcion','$email')";


$resultado = mysqli_query($conn, $sql);

if ($resultado === TRUE) {
    header("location:Index.php");
} else {
    echo "Datos NO insertados";
}
