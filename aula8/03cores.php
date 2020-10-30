<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])? $_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Curso de HTML5 e CSS3</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor;?>;
            }
        </style>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
       echo "<span class='texto'>$txt</span>";
    ?>
       <br/> <a href="03-exercicio.html">Voltar</a>;
    </div>
</body>
</html>