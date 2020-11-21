<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresaste</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="Jotaro.css">
</body>
</html>
<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
} 
echo "<h2 align='center'>Soy un mensaje secreto</h2>";
?>
<center>
<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>
<a href="index.html">Cerrar sesión</a></center>