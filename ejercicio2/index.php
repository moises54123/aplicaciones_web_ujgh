<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Superficie del rectángulo</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 480px; margin: 40px auto; padding: 0 16px; color: #222; }
        h1 { font-size: 1.4rem; }
        .resultado { background: #f1f5f9; border-left: 4px solid #3b82f6; padding: 12px 16px; margin-top: 16px; }
    </style>
</head>
<body>
    <h1>Ejercicio 2: Superficie del rectángulo</h1>
    <?php
    $base = 1;
    $altura = 2;
    $superficie = $base * $altura;
    echo "<p>Base = $base, Altura = $altura</p>";
    echo "<p>Fórmula: base × altura</p>";
    echo "<div class=\"resultado\">Superficie: $superficie</div>";
    ?>
</body>
</html>
