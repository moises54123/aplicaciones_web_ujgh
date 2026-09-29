<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1: Operación combinada</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 480px; margin: 40px auto; padding: 0 16px; color: #222; }
        h1 { font-size: 1.4rem; }
        .resultado { background: #f1f5f9; border-left: 4px solid #3b82f6; padding: 12px 16px; margin-top: 16px; }
    </style>
</head>
<body>
    <h1>Ejercicio 1: Operación combinada</h1>
    <?php
    $A = 1;
    $B = 2;
    $resultado = ($A + $B) ** 2 / 3;
    echo "<p>A = $A, B = $B</p>";
    echo "<p>Fórmula: (A + B)² / 3</p>";
    echo "<div class=\"resultado\">Resultado: " . round($resultado, 2) . "</div>";
    ?>
</body>
</html>
