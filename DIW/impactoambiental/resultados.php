<?php

        /* TAREA: MOSTRAR LOS CAMPOS DEL FORMULARIO */
        $nombre = $_GET["nombre"];
        $clase = $_GET["clase"];  //como en c, me gusta inciar las variables que usaré arriba del todo
        $faccion = $_GET["faccion"];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Clase: $clase</p>"; // una vez obtenemos el contenido con el get, visualizamos la variable con echo
        echo "<p>Faccion: $faccion</p>";

        if (isset($_GET["checkboxVarios"])) { //uso el isset para ver si se ha marcado alguna casilla
            $checkboxVarios = $_GET["checkboxVarios"]; //si es asi, inicio y almaceno el array
            echo "<p>Mascotas seleccionadas:</p>";
            foreach ($checkboxVarios as $mascota) { //recorro el array con un for each, y lo visualizo
                echo "<p>$mascota</p>";
            }
        }else{
            echo" <p>No se han seleccionado mascotas. </p>"; //si no existe, es que no se ha escogido
        }


        if (isset($_GET["condiciones"])){ //si se han marcado las condiciones...
            echo "condiciones aceptadas"; //veo que si 
        }else{
            echo "condiciones no aceptadas"; //veo que no
        }

?>