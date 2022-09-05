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
        $ano = $_GET["an"];
        $idade = date("Y") - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos. <br/>";
        $tipo = ($idade>=18 && $idade<65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "E dessa forma o seu voto é $tipo";

    ?>
    </div>
</body>
</html>