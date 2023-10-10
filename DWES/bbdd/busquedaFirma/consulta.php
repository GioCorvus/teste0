<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta Jesuita</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class='divo'>
            <p>
                <?php
                    $conexion = mysqli_connect('localhost', 'root', '', 'bbdd');

                    if (!$conexion) {
                        die("Conexión fallida: " . mysqli_connect_error());
                    }

                    if (isset($_GET['palabra'])) {
                        $palabra = mysqli_real_escape_string($conexion, $_GET['palabra']);

                        $query = "SELECT * FROM jesuita WHERE firma LIKE '%$palabra%'";
                        
                        if($palabra == ''){
                            echo "No se ha introducido nada";
                        }
                        else{
                            $result = mysqli_query($conexion, $query);


                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { 
                                    echo "ID: " . $row['idJesuita'] . "<br>";
                                    echo "Nombre: " . $row['nombre'] . "<br>";
                                    echo "Firma: " . $row['firma'] . "<br><br>";
                                }
                            } else {
                                echo "No se encontraron resultados para la palabra '$palabra'.";
                            }
                        } else {
                            echo "Error en la consulta: " . mysqli_error($conexion);
                        }
                        }
                        

                        mysqli_close($conexion);
                    }
                ?>
            </p>
        </div>
    </body>
</html>