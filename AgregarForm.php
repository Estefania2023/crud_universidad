<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Alumno</h1>
    <br>
    <div class="container">
        <form action="insertarDatos.php" method="POST">

        <div class="mb-3">
            <label class="form-label">nombre y apellido </label>
            <input type="text" class="form-control" name="nombreapellido" >
        
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>


        <label for="">Docente</label>
        <select class="form-select mb-3" name="docente">
            <option selected disabled>--Seleccionar Docente--</option>
            <?php
                include 'Conexion.php';

                $sql = $conn->query("SELECT * FROM docente");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['Iddocente']."'>".$resultado['nombre']."</option>";
                }
            ?>
        </select>
        <label for="">Asignaturas</label>
        <select class="form-select mb-3" name="programa">
            <option selected disabled>--Seleccionar asignatura--</option>
            <?php
          include 'Conexion.php';

                $sql = $conn->query("SELECT * FROM programa");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['Idprograma']."'>".$resultado['nombreprograma']."</option>";
                }
            ?>
        </select>
        
       
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="Index.php" class="btn btn-dark">Regresar</a>
        </div>
        
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>