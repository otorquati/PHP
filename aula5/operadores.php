<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
    /* Input de valores pelo usuário */
    $n1=$_GET["a"];
    $n2=$_GET["b"];
    echo "<h2> Os valore digitados pelo usuário foram $n1 e $n2</h2>";
     /* Aula de Operadores */
    echo "<h3>Operadores Matemáticos</h3>";
    echo "<br>A soma vale ". ($n1+$n2);
    echo "</br>A subtração vale ". ($n1-$n2);
    echo "</br>A multiplicação vale ". ($n1*$n2);
    echo "</br>A divisão vale ". ($n1/$n2);
    echo "</br>O módulo vale ".($n1%$n2);
    /* Aula de ordem de operação */
    echo "<h3>Ordem de cálculo</h3>";
    $m=($n1+$n2)/2;
    echo "</br>A média entre $n1 e $n2 é $m";
    /* Aula de funções aritiméticas */
    echo "<h3>Operadores Matemáticos</h3>";
    echo "</br>O valor absoluto entre $n2 é ". abs($n2);
    echo "</br>O valor de $n1 <sup>$n2 </sup> é ". pow($n1,$n2);
    echo "</br>A raiz quadrada de $n1 multiplicdo por $n2 é igual a ". sqrt($n1*$n2);
    echo "</br>O valor arredondado de $n1 dividido $n2 é ".round($n1/$n2);
    echo "</br>A parte em inteira de $n1 divido $n2 é ". intval($n1/$n2);
    /* Number Format */
    echo "</br>O valor em moeda de $n1 é R$ ". number_format($n1,2,",",".");
    ?>
    </div>
</body>
</html>