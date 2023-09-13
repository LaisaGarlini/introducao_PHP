<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php
        $valor1 = 1;
        $valor2 = 5;
        $valor3 = 20;

        $cor = '';
        if ($valor1 > 10) {
            $cor = 'blue';
        } elseif ($valor2 < $valor3) {
            $cor = 'green';
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = 'red';
        }

        echo '<p style="color:' . $cor . ';">A soma dos valores é: ' . $valor1 + $valor2 + $valor3 . '</p>';
    ?>
    
</body>
</html>