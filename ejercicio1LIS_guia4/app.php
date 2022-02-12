<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exponentes</title>
</head>
<body>
    <?php
        if(isset ($_POST['submit']) && $_POST['submit'] == "Enviar"):

            //Accediendo a los datos del formulario usando la funcion extract
            extract($_POST);

            $base = !empty($base) ? $base : "<a href=\"index.html\">No ingreso la base.</a>";
            $expo = !empty($expo) ? $expo : "<a href=\"index.html\">No ingreso la potencia.</a> ";
            $pow1 = pow($base,$expo);
            while($base <= $pow1){
                echo "\t<p> $base </p>\n";
                $base = $base * $base;
            }
            echo "\t<h1>Con ciclo while: $base </h1>\n";
            echo "\t<h1>Con un metodo : $pow1 </h1>\n";
            echo "<a href=\"index.html\">Volver</a>";
        endif;
    ?>
</body>
</html>