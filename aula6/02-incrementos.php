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
     /* Operadores de Incremento */
     $atual = $_GET["aa"];
     echo "O ano atual é $atual";
     echo "</br>O ano anterior é ". --$atual;
     echo "</br>O ano posterior é ". ++$atual;
    
    ?>
    </div>
</body>
</html>