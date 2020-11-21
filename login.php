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
$usuario_correcto = "Jotaro";
$palabra_secreta_correcta = "Dio";
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: secreta.php");
} else {
    echo "<div align='center'>El usuario o la contraseña son incorrectos</div>";
    
}
?>
<center>
<p>
</p>
<a href="index.html">Regresar</a></center>
