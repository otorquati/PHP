<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Condicional Switch</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
        $n=isset($_GET["num"])?$_GET["num"]:0;
        $o=isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o){
            case 1:
                $r=$n*2;
            break;
            case 2:
                $r=pow($n,3);
            break;
            case 3:
                $r=sqrt($n); // $r = $n^(1/2)
            }
        echo "O resultado da operação solicitada foi <span>$r</span> <br/>"; 
    ?>
    <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>
</html>