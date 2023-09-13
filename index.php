<?php

// Obtenemos la hora actual
$hora = date("H:i:s");

$title = $_GET['title'];

// Generamos el código HTML de la página
echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
  <title>$title</title>
</head>
<body>
  <h1>La hora actual es:</h1>
  <p>$hora</p>
</body>
</html>
HTML;

?>
