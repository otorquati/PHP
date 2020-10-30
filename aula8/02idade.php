<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Curso de HTML5 e CSS3</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
        $nome = isset($_GET["nome"]) ? $_GET["nome"]: "[Não Informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0; 
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade";
    ?>
       <br/> <a href="02-exercicio.html">Voltar</a>;
    </div>
</body>
</html>