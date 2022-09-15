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
        // Retorna uma substring contida em uma string com inicio e final determinados.
        Echo ("<p>Exemplo de uso da função substr() retirando as 5 primeiras letras</p>");
        $site="Curso em vídeo";
        Echo "<p> Frase: $site </p>";
        $inicio=0;
        $fim=5;
        $sub=substr($site, 0,5);
        printf('A substring <strong>%s</strong> está contida em %s, inciando em: %d e terminando em %d',$sub,$site, $inicio,$fim);
        echo"<br/>";
        $inicio=-6;
        $fim=2;
        $sub=substr($site, $inicio);
        printf('A substring <strong>%s</strong> está contida em %s, inciando em: %d',$sub,$site, $inicio);
        echo"<br/>";
        $inicio=6;
        $fim=2;
        $sub=substr($site, $inicio);
        printf('A substring <strong>%s</strong> está contida em %s, inciando em: %d',$sub,$site, $inicio, $fim);
   
    ?>
    </div>
</body>
</html>