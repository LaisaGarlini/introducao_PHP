<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php
        $valor = 15000; 
        $qtdParcela = [24, 36, 48, 60];
        $taxa = 2; 
        $inc = 0.3; 
        
        foreach ($qtdParcela as $parcelas) {
          $juros = $taxa + ($parcelas - 24) * $inc;
        
          $jurosdeciaml = $juros / 100;
          $montante = $valor * pow(1 + $jurosdeciaml, $parcelas);
        
          $valorParcela = $montante / $parcelas;
        
          echo "Parcelado em $parcelas vezes: R$ " . number_format($valorParcela, 2, ',', '.') . " por mês<br>";
        }
    ?>
</body>
</html>