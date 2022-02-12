<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicacion</title>
</head>
<body>
    <center>
        <h1 style="color: green;">
            Tabla de Multiplicar
        </h1>
        <form method="POST">
            Ingrese un numero: 
            <input type="text" name="number">              
            <input type="Submit" 
                value="Tomar el valor.">
        </form>
    </center>
</body>
</html>

<?php
if($_POST) {
    $num = $_POST["number"];
    echo nl2br("<p style='text-align: center;'>
        Tabla de multiplicar del $num: </p>
    ");         
    for ($i = 1; $i <= 10; $i++) {
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p>
        ");
    }
}
?>