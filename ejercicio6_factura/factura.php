<?php
$descripcion = htmlspecialchars($_POST['descripcion']);
$cantidad = (int) $_POST['cantidad'];
$precio = (float) $_POST['precio'];

$subtotal = $cantidad * $precio;
$iva = $subtotal * 0.12;
$totalConIva = $subtotal + $iva;

// Descuento del 15% si el total con IVA supera los 150 $
if ($totalConIva > 150) {
    $descuento = $totalConIva * 0.15;
    $aplica = "Sí (15%)";
} else {
    $descuento = 0;
    $aplica = "No";
}

$totalNeto = $totalConIva - $descuento;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
</head>
<body>
    <h1>Factura</h1>
    <p>Artículo: <?= $descripcion ?></p>
    <p>Cantidad: <?= $cantidad ?></p>
    <p>Precio unitario: <?= number_format($precio, 2) ?> $</p>
    <p>Subtotal: <?= number_format($subtotal, 2) ?> $</p>
    <p>IVA (12%): <?= number_format($iva, 2) ?> $</p>
    <p>Total con IVA: <?= number_format($totalConIva, 2) ?> $</p>
    <p>Descuento: <?= $aplica ?> → <?= number_format($descuento, 2) ?> $</p>
    <p><strong>Total neto a pagar: <?= number_format($totalNeto, 2) ?> $</strong></p>
    <a href="index.html">Volver</a>
</body>
</html>
