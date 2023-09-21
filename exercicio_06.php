<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <?php
        $valor = 50.00;

        $precoMaca = 4.50;
        $precoMelancia = 2.00;
        $precoLaranja = 3.00;
        $precoRepolho = 2.50;
        $precoCenoura = 2.00;
        $precoBatatinha = 2.00;

        $qtdMaca = 2.5;
        $qtdMelancia = 5.0;
        $qtdLaranja = 2.0;
        $qtdRepolho = 1.0;
        $qtdCenoura = 0.5;
        $qtdBatatinha = 0.5;

        $valorMaca = $precoMaca * $qtdMaca;
        $valorMelancia = $precoMelancia * $qtdMelancia;
        $valorLaranja = $precoLaranja * $qtdLaranja;
        $valorRepolho = $precoRepolho * $qtdRepolho;
        $valorCenoura = $precoCenoura * $qtdCenoura;
        $valorBatatinha = $precoBatatinha * $qtdBatatinha;

        $total = $valorMaca + $valorMelancia + $valorLaranja + $valorRepolho + $valorCenoura + $valorBatatinha;

        if ($total == $valor) {
            echo "<span style='color:green;'>Saldo para s foi esgotado.</span>";
        } elseif ($total > $valor) {
            $valorExcedente = $total - $valor;
            echo "<span style='color:red;'>Joãozinho não tem dinheiro suficiente. Faltam R$ " . number_format($valorExcedente, 2, ',', '.') . ".</span>";
        } else {
            $valorRestante = $valor - $total;
            echo "<span style='color:blue;'>Joãozinho ainda pode gastar R$ " . number_format($valorRestante, 2, ',', '.') . ".</span>";
        }
    ?>    
</body>
</html>