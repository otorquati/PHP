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
      $txt="Aqui temos um texto gigante criado pelo PHP que irá demonstrar o funcionamento da função wordwrap.";
      $res=wordwrap($txt,10, "<br/>\n",false);
      echo "$res";
    ?>
    </div>
</body>
</html>