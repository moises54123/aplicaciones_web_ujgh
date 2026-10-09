<?php
$nombre = htmlspecialchars($_POST['nombre']);
$cedula = htmlspecialchars($_POST['cedula']);
$diurnas = (float) $_POST['diurnas'];
$vespertinas = (float) $_POST['vespertinas'];
$nocturnas = (float) $_POST['nocturnas'];

// Sueldo bruto según las tarifas por hora
$bruto = $diurnas * 675 + $vespertinas * 700 + $nocturnas * 956.23;

// Porcentajes de retención según la escala salarial
if ($bruto < 85000) {
    $pAhorro = 0.1;
    $pSeguro = 0.15;
} elseif ($bruto <= 150000) {
    $pAhorro = 0.15;
    $pSeguro = 0.2;
} else {
    $pAhorro = 0.3;
    $pSeguro = 0.25;
}

$ahorro = $bruto * $pAhorro / 100;
$seguro = $bruto * $pSeguro / 100;
$neto = $bruto - $ahorro - $seguro;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del sueldo</title>
</head>
<body>
    <h1>Sueldo quincenal</h1>
    <p>Nombre: <?= $nombre ?></p>
    <p>Cédula: <?= $cedula ?></p>
    <p>Sueldo bruto: <?= number_format($bruto, 2) ?> Bs.</p>
    <p>Ahorro Habitacional (<?= $pAhorro ?>%): <?= number_format($ahorro, 2) ?> Bs.</p>
    <p>Seguro Social (<?= $pSeguro ?>%): <?= number_format($seguro, 2) ?> Bs.</p>
    <p><strong>Sueldo neto: <?= number_format($neto, 2) ?> Bs.</strong></p>
    <a href="index.html">Volver</a>
</body>
</html>
