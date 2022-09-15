<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Funções Strings</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php 
        // Str_replace($str1,str$,$frase) substitui a str1 pela $str2 na $frase).
        Echo ("<p>Exemplo de uso da função str_replace()</p>");
        $frase="Gosto de estudar Matemática";
        $s1="Matemática";
        $s2="PHP";
        Echo "<p> frase: $frase </p>";
        $novo=str_replace($s1,$s2,$frase);
        print("Usando str_replace e substituindo <strong>$s1</strong> por <strong>$s2</strong> fica: <br/>");
        print("<br/><strong>$novo</strong>");
        echo"<br/>";
    ?>
    </div>
</body>
</html>