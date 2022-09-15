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
      <table border=1><tr>
        
        <?php
    /* foreach example 1: value only */
    $c = range(5,20,2);
    foreach ($c as $v) {
      echo "<td> $v ";
    }
    ?>
  </table>
    </pre>
    </div>
</body>
</html>