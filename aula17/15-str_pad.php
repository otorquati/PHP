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
        // Str_pad coloca uma substring de tamanho determinado preenchendo com espaços.
        Echo ("<p>Exemplo de uso da função str_pad()</p>");
        $nome="Osvaldo";
        Echo "<p> Nome: $nome </p>";
        $novo=str_pad($nome,30,"_",STR_PAD_LEFT);
        print("Meu programador favorito é $novo , o melhor em STR_PAD_LEFT<br/>");
        echo"<br/>";
        $novo=str_pad($nome,30,"_",STR_PAD_RIGHT);
        print("Meu programador favorito é $novo , o melhor em STR_PAD_RIGHT<br/>");
        echo"<br/>";
        $novo=str_pad($nome,30,"_",STR_PAD_BOTH);
        print("Meu programador favorito é $novo , o melhor em STR_PAD_BOTH<br/>");
        echo"<br/>";
    ?>
    </div>
</body>
</html>