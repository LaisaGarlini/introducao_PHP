<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <?php
        $valor = 22500;

        $parcela = 489.65;

        $qtdParcela = 60;

        $juros = ($parcela * $qtdParcela) - $valor;

        echo "O valor dos juros é: " . number_format($juros, 2, ',', '.');
    ?> 
</body>
</html>