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
      <pre>
        <?php
            /*  Matriz são vetores de vetores */
            $v=array(array(2,6),
            array(5,7),
            array(6,9));
            $v[0][1]=$v[2][0];
            print_r($v);
            
            ?>
      </pre>
    </div>
</body>
</html>