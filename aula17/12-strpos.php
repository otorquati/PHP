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
        Echo ("<p>Exemplo de uso da função strpos()</p>");
        $frase="Estou aprendendo PHP";
        Echo "<p> Nome: $frase </p>";
        $pos=strpos($frase, "PHP");
        print("PHP está na posição: ".$pos);
        echo "<br/>";
        /* Devolve a posição de uma string dentro de outra string mesmo usando caixas difirentes */
        Echo ("<p>Exemplo de uso da função stripos(), o i é de ignore a caixas</p>");
        $frase="Estou aprendendo php";
        Echo "<p> Nome: $frase </p>";
        $pos=stripos($frase, "PHP");
        print("PHP está na posição: ".$pos);
        echo "<br/>";
    ?>
    </div>
</body>
</html>