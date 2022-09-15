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
        // Devolve a posição de uma string dentro de outra string
        Echo ("<p>Exemplo de uso da função strrev()</p>");
        $nome="Osvaldo Torquati ";
        Echo "<p> Nome: $nome </p>";
        $nome2=strrev($nome);
        print("Seu nome usando strrev() fica assim: ".$nome2);
        echo "<br/>";
    ?>
    </div>
</body>
</html>