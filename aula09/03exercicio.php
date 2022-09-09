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
        $n1= isset($_GET["nota1"])? $_GET["nota1"]: 0;
        $n2= isset($_GET["nota2"])? $_GET["nota2"]: 0;
        $m = ($n1+$n2)/2;
        $r = "Reprovado";
        if ($m>=5 && $m<7){
            $r="está em Recuperação";
        }
        elseif ($m>=7) {
            $r = "está Aprovado";
        } 
        echo "A média entre <h2>$n1 e $n2 é $m </h2><br/>";
        echo "O aluno está <h2>$r</h2>"
    ?>
    <a href="03exercicio.html">Voltar</a>
    </div>
</body>
</html>