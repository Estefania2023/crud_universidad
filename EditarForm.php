<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR PRODUCTOS</h1>
    <br>
    <form class="container" action="EditarDatos.php" method="POST">
        <?php
         include 'Conexion.php';

            $sql = "SELECT * FROM estudiantes WHERE Idestudiante =".$_GET['Id'];
            $resultado = $conn->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['Idestudiante']; ?>">

        <!--TRAER DATOS CATEGORIAS-->
        <label>PROGRAMAS</label>
        <select class="form-select mb-3" aria-label="Default select example" name="programa">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php
               include 'Conexion.php';

                $sql1 = "SELECT * FROM programa WHERE Idprograma=".$row['programaId'];
                $resultado1 = $conn->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Idprograma']."'>".$row1['nombreprograma']."</option>";

                $sql2 = "SELECT * FROM programa";
                $resultado2 = $conn->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Idprograma']."'>".$Fila['nombreprograma']."</option>";
                }
            ?>   
        </select>
        <label>DOCENTES</label>
        <select class="form-select mb-3" aria-label="Default select example" name="docente">
            <option selected disabled>--Seleccione marcas--</option>
            <?php
               include 'Conexion.php';

                $sql3 = "SELECT * FROM docente WHERE Iddocente=".$row['docenteId'];
                $resultado3 = $conn->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['Iddocente']."'>".$row3['nombre']."</option>";

                $sql4 = "SELECT * FROM docente";
                $resultado4 = $conn->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['Iddocente']."'>".$Fila['nombre']."</option>";
                }
            ?>   
        </select>

        <div class="mb-3">
            <label class="form-label">nombre y apellido</label>
            <input type="text" class="form-control" name="nombreapellido" value="<?php echo $row['nombreapellido']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['emailE']; ?>">
            <div class="mb-3">
            <label class="form-label">edad</label>
            <input type="text" class="form-control" name="edad" value="<?php echo $row['edad']; ?>">
        </div>

        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>