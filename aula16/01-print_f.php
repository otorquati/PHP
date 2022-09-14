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
      $p="Leite";
      $pr=4.5;
      // Método antigo 
      echo "O $p custa R$ ".number_format($pr,2);
      // usando printf
      echo "<br/>";
      printf("O %s custa R$ %0.2f", $p, $pr)
    ?>
    </div>
</body>
</html>