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
          $v=array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
          echo "Exibindo o vetor com print_r<br/>";
          print_r($v);
/*          echo "Classificando o vetor<br/>";
          echo "de forma associativa com asort<br/>";
          ksort($v); // Ordena o vetor em ordem crescente
          print_r($v);*/
          echo "Classificando o vetor<br/>";
          echo "de forma associativa com arsort<br/>";
          krsort($v); // Ordena o vetor em ordem decrescente
          print_r($v);
      ?>
    </pre>
    </div>
</body>
</html>