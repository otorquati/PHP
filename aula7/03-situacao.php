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
      # Operador relacional 2
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    echo "A média entre $nota1 e $nota2 é $m <br/>";
    $sit = ($m<6 ? "REPROVADO" : "APROVADO");
    echo "Situação do Aluno é ".(($m<6)? "REPROVADO" : "APROVADO")
    ?>
    </div>
</body>
</html>