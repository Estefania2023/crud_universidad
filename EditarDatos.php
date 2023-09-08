<?php

include 'Conexion.php';

    $id = $_POST['id'];
    $Categoria = $_POST['programa'];
    $Marcas = $_POST['docente'];
    $Nombre = $_POST['nombreapellido'];
    $Precio = $_POST['email'];
    $Descripcion = $_POST['edad'];
   
    

    $sql = "UPDATE estudiantes SET 
                    programaId='".$Categoria."',
                    docenteId='".$Marcas."',
                    nombreapellido='".$Nombre."',
                    emailE='".$Precio."',
                    edad='".$Descripcion."'
                     WHERE Idestudiante =".$id."";

    if ($resultado = $conn->query($sql)) {
        header("location:Index.php");
    }
