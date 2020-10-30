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
        $a= isset($_GET["ano"])? $_GET["ano"]: 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos. <br/>";
        $d = "não pode dirigir";
        if ($i < 16){
            $v = "não pode votar";
        }
        elseif (($i>=16 && $i<18) || ($i>=65)) {
               $v = "seu voto é opcional";
           }
           else {
               $v = "seu voto é obrigatório";
               $d = "já pode dirigir";
           }
        echo "Com essa idade você $v e $d";
    ?>
    <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>