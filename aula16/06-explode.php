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
        echo "<p>Ex. usando explode</p>";
        $site="Curso em video";
        $vetor=explode(" ",$site);
        print_r($vetor);
        echo "<p>Ex. usando str_split</p>";
        $site="Maia";
        $vetor=str_split($site);
        print_r($vetor);
    ?>
    </div>
</body>
</html>