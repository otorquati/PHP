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
    # Operadores Relacionais
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    # passar os valores através da URL op pode ser s ou outro valor
    echo "Os valores passados foram $n1 e $n2 </br>";
    $r = $tipo == "s" ? $n1+$n2 : $n1*$n2;
    echo "O resultado é $r</br>";
    # Operador relacional 2
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    echo "A média entre $nota1 e $nota2 é $m </br>";
    echo "Situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO");
    ?>
    </div>
</body>
</html>