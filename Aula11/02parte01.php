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
        <form method="GET" action="02parte2.php">
            <?php
            $c=1;
            while ($c<=5){
                echo "Valor $c: <input type='namber' name'v$c' max=100 min='0' value='0'/><br/>";
                $c++;
            }
    ?>
    <input type="submit" value="Enviar" class="botao"/>
    </div>
</body>
</html>