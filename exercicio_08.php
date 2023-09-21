<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <?php
        $valor = 8654.00;

        $juros = 0.015;

        $parcelas = [24, 36, 48, 60];

        foreach ($parcelas as $qtdParcelas) {
            $valorParcela = ($valor / $qtdParcelas) * (1 + ($juros * $qtdParcelas));
            echo $qtdParcelas ." parcelas de valor R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
            
            $juros += 0.005;
        }
    ?>
</body>
</html>