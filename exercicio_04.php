<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <?php
        $ladoA = 10;
        $ladoB = 2;

        $areaRetangulo = $ladoA * $ladoB;

        $fraseResultado = "A área do retângulo de lados " . $ladoA . " e " . $ladoB . " metros é " . $areaRetangulo . " metros quadrados.";

        $tagHTML = ($areaRetangulo > 10) ? 'h1' : 'h3';

        echo "<$tagHTML>$fraseResultado</$tagHTML>";
    ?>
</body>
</html>