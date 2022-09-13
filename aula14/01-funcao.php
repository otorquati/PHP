<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Funções</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
        function soma($a, $b){
            $s=$a+$b;
            echo "<p> A soma entre $a e $b é igual a $s</p>";
        }
        soma(2,8);
        soma(5,11);
        $x=12;
        $y=11;
        soma($x,$y);
    ?>
    </div>
</body>
</html>