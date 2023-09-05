<?php
      include 'Conexion.php';

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM productos WHERE IdProducto ='$Id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:Index.php");
    }

?>