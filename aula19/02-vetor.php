<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Vetores e Matrizes<Main></Main>trizes</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <pre>
      <?php
          $v=array("A","J","M","X","K");
          echo "Exibindo o vetor com print_r<br/>";
          print_r($v);
          echo "Incluindo valor com array_unshift.<br/>";
          array_unshift($v,"O"); // insere o valor no início do vetor
          print_r($v);
          echo "Removendo valor com array_shift.<br/>";
          array_shift($v); // remove o valor no início do vetor
          print_r($v);
      ?>
    </pre>
    </div>
</body>
</html>