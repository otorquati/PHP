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
        // Conta o número de ocorrências de uma string dentro de outra string
        Echo ("<p>Exemplo de uso da função substr_count()</p>");
        $frase="Estou aprendendo PHP no curso em vídeo de PHP";
        Echo "<p> Frase: $frase </p>";
        $c=substr_count($frase, "PHP");
        print("PHP aparece em : ".$c." posições na frase: <br/> <strong>".$frase."</strong>");
   
    ?>
    </div>
</body>
</html>