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
        echo "<p> Exemplo da função chr</p>";
        $l=67;
        $letra=chr($l);
        echo "A letra de código $l é $letra</p>";
        $l=99;
        $letra=chr($l);
        echo "A letra de código $l é $letra";
        echo "<p> Exemplo da função ord </p>";
        $letra="B";
        $l=ord($letra);
        echo "A letra $letra  possui código $l";
    ?>
    </div>
</body>
</html>