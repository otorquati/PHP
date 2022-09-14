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
      $v[0]=4;
      $v[1]=8;
      $v[2]=10;
      echo "<p>Exemplo print_r():</p>";
      print_r($v);
      echo "<p>Exemplo usando array():</p>";
      $s=array(2,3,5,7,9);
      print_r($s);
      echo "<p>Ex. com var_dump: </p>";
      var_dump($s);
      echo "<p>Ex. com var_export </p>";
      var_export($s)
    ?>
    </div>
</body>
</html>