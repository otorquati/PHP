<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
    /*  Vetores Pesonalizados 
        Valores de tipos diferentes */
    $v=array("nome"=>"Hilda",
           "idade"=>56,
            "peso"=>74.5);
      //print_r($v);
      // Apresentando o vetor com foreach
      foreach($v as $k=>$c){
        echo "O campo $k possui o valor $c.<br/>";
      }
    ?>
    </div>
</body>
</html>