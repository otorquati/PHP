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
      include "funcoes.php"
      function teste(&$x){
        $x+=2;
        echo "<p> O valor de X é $x<p>";
      }

      $a=3;
      teste($a);
      echo "<p>O valor de A é $a</p>";
    ?>
    </div>
</body>
</html>