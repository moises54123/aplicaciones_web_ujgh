<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: Costo de galones</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 480px; margin: 40px auto; padding: 0 16px; color: #222; }
        h1 { font-size: 1.4rem; }
        .resultado { background: #f1f5f9; border-left: 4px solid #3b82f6; padding: 12px 16px; margin-top: 16px; }
    </style>
</head>
<body>
    <h1>Ejercicio 4: Costo de galones</h1>
    <?php
    $galones = 3;
    $litrosPorGalon = 3.785;
    $precioPorLitro = 4.50;
    $total = $litrosPorGalon * $precioPorLitro * $galones;
    echo "<p>Galones: $galones (1 galón = $litrosPorGalon litros, precio por litro = $precioPorLitro)</p>";
    echo "<div class=\"resultado\">Total a pagar: " . number_format($total, 2) . "</div>";
    ?>
</body>
</html>
