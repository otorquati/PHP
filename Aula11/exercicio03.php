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
        $i=isset($_GET["ini"])? $_GET["ini"]: 0;
        $f=isset($_GET["fim"])? $_GET["fim"]: 0;
        $s=isset($_GET["nInc"])? $_GET["nInc"]: 1;
        // echo "<p> Inicio: $i FInal: $f Incremento: $s</p>";
        if ($f>$i) {
            $c=$i;
             while ($c<$f) {
                echo "<span>$c </span>";
                $c=$c+$s;
            } 
        } else {
            $c=$i;
            while ($c>$f) {
                echo "<span>$c </span>";
                $c=$c-$s;  
            }
        }
    ?>
    </div>
</body>
</html>