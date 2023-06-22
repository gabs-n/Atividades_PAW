<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            margin-top: 50px;
        }
    </style>

    <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];

        $soma1 = $numero1 + $numero2
        $subtracao1 = $numero1 - $numero2
        $multiplicacao1 = $numero1 * $numero2
        $divisao1 = $numero1 / $numero2

        $soma2 = $numero1 + $numero2 + $numero3 + $numero4
        $subtracao2 = $soma1 - $soma2
        $multiplicacao2 = $soma1 * $soma2
        $divisao2 = $soma1 / $soma2

        echo "<h2>Resultados:</h2>";
        echo "Soma do número 1 + o número 2 = " . $soma1 . "<br>";
        echo "Subtração do número 1 - o número 2 = " . $subtracao1 . "<br>";
        echo "Multiplicação do número 1 * o número 2 = " . $multiplicacao1 . "<br>";
        echo "Divisão do número 1 pelo número 2 = " . $divisao1 . "<br>";

        echo "Soma dos 4 números = " . $soma2 . "<br>";
        echo "Subtração da soma 1 - a soma 2 = " . $subtracao2 . "<br>";
        echo "Multiplicação da soma 1 * a soma 2 = " . $multiplicacao2 . "<br>";
        echo "Divisão da soma 1 pela soma 2 = " . $divisao2 . "<br>";
    ?>
</body>
</html>