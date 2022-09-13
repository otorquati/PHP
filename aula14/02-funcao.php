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
            return $s;
        }
        $x=12;
        $y=11;
        $r=soma($x,$y);
        echo "<p> A soma entre $x e $y é $r<p>"
    ?>
    </div>
</body>
</html>