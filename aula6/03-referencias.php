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
     /* Operadores de Referências */
    $a = 5;
    $b = $a;
    $b += 3;
    echo "Atribuição Normal das Variáveis A e B</br>";
    echo "A vale $a e ";
    echo "</br> B vale $b";
    $b = &$a;
    echo "</br></br>";
    echo "Atribuição por Referência</br>";
    echo "A vale $a e ";
    echo "</br> B vale $b";
    ?>
    </div>
</body>
</html>