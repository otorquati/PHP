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
      $t=isset($_GET["num"])?$_GET["num"]:1;
      for($c=1;$c<=10;$c++){
        $r=$c*$t;
        echo "$c * $t = $r <br/>";
      }
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>