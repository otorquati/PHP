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
    /* Operadores de Atribuição */
          $preco = $_GET["p"];
          echo "O preço do produto é R$ ". number_format($preco, 2);
          $preco += ($preco*10/100);
          echo "</br>O novo preço é R$ " . number_format($preco,2);
    /* Operadores de Incremento */
    
    ?>
    </div>
</body>
</html>