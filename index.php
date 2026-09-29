<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "hola"; ?></title>
</head>
<body>
    <?php 
    $A = 1;
    $B = 2;
    $resultado = ($A + $B)**2/3;
    echo "<$resultado>";

    $base = 1;
    $altura = 2;
    $superficie = ($base * $altura);
    echo "<$superficie>";

    $base = 1;
    $altura = 2;
    $superficie2 = ($base * $altura)/2;
    echo "<$superficie2>";

    $galones = 3;
    $total = 3.785 * 4.50 * $galones;
    echo "<$total>";
    ?>
    <br>
</body>
</html>