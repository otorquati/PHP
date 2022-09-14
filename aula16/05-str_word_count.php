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
        echo "<p>Ex. usando str_word_count(str,0)</p>";
        $frase="Eu vou estudar PHP agora!";
        $cont=str_word_count($frase,0);
        printf('A frase <strong>%s</strong> tem %d palavras',$frase,$cont); 
        echo "<p> Ex. usando str_word_count(str,1)</p>";
        $frase="Eu vou estudar PHP agora!";
        $cont=str_word_count($frase,1);
        print_r($cont);
        echo "<p> Ex. usando str_word_count(str,2)</p>";
        $frase="Eu vou estudar PHP agora!";
        $cont=str_word_count($frase,2);
        print_r($cont);
    ?>
    </div>
</body>
</html>