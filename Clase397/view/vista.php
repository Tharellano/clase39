<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="estilos.css">
        <title>Encomiendas</title>
    </head>
    <body>
        <center>
		<h1>Encomiendas</h1>

        <?php

        $precio = 0;
        

        echo '<table border="1px">';

        echo "<tr>";
        echo "<td>Numero</td>";
        echo "<td>Fecha</td>";
        echo "<td>Tipo</td>";
        echo "<td>Despachante</td>";
        echo "<td>Destinatario</td>";
        echo "<td>Precio</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";

        foreach ($datos as $dato){

            if($dato["tipo"] == "sobre"){
                $precio = 100;
            }
            if($dato["tipo"] == "paquete"){
                $precio = 200;
            }
            if($dato["tipo"] == "caja"){
                $precio = 300;
            }

            echo "<tr>";
            echo '<td>' . $dato["numero"] . '</td>';
            echo '<td>' . $dato["fecha"] . '</td>';
            echo '<td>' . $dato["tipo"] . '</td>';
            echo '<td>' . $dato["despachante"] . '</td>';
            echo '<td>' . $dato["destinatario"] . '</td>';
            echo '<td>' . "$" . $precio . '</td>';
            echo "</tr>";

        }

        echo "</table>";

        ?>
        </center>
    </body>
</html>
