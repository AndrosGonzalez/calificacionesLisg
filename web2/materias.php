<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clase2.css" rel="stylesheet">

     </head>
    <body background="imagenes/olivo.jpg"> 

      <!--BARRA MENU-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-nav">
                        <li class="active"><a href="Menu.php">Home</a></li>  
                        <li><a href="docentes.php">Docentes</a></li>
                        <li><a href="alumnos.php">Alumnos</a></li>
                        <li><a href="director.php">Director</a></li>
                        <li><a href="materias.php">Materias</a></li>
                </ul>
            </div>
        </nav>
        <header class="container-fluid">
          <div class="container">
            <h1 class="text-center">MATERIAS</h1> 
          </div>
        </header>
    

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


        
        <?php
            include('connectD_db.php');
            $consulta=mysqli_query($link,"SELECT id_grupo,nombre_materia,nombre,ap_paterno,ap_materno FROM grupo, materia,docente")or die(mysqli_error($link));
            $registro=mysqli_fetch_array($consulta);

            echo "<table border=3>";

                echo "<thead >";
                    echo "<th> Grupo </th>";
                    echo "<th> Nombre Materia </th>";
                    echo "<th> Nombre </th>";
                    echo "<th> Apellido Paterno </th>";
                    echo "<th> Apellido Materno </th>";
                echo "<thead>";

            do{
                $idg=$registro['id_grupo'];
                $mat=$registro['nombre_materia'];
                $nom=$registro['nombre'];
                $app=$registro['ap_paterno'];
                $apm=$registro['ap_materno'];

                echo "<tr>";
                    echo "<td>$idg</td>";
                    echo "<td>$mat</td>";
                    echo "<td>$nom</td>";
                    echo "<td>$app</td>";
                    echo "<td>$apm</td>";
                echo "</tr>";
                }

                while ($registro=mysqli_fetch_array($consulta));
                echo "</table>";
        ?> 

<br>
<br>
   

    </body>
</html>

