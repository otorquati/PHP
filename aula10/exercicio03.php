<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Condicional Switch - aula 10</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
        $Est=isset($_GET["cEst"])?$_GET["cEst"]:"SU";
        switch ($Est) {
            case "SU":
                $regiao="Sul";
            break;
            case "SE":
                $regiao="Sudeste";
            break;
            case "CO":
                $regiao="Centro-Oeste";
            break;
            case "NE":
                $regiao="Nordeste";
            break;
            case "N":
                $regiao="Norte";
            }
            echo "<h1> Você é da região <h1><span>$regiao</span>";
    ?>
    </div>
</body>
</html>