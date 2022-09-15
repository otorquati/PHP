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
        // Converte a String para minúscula
        Echo ("<p>Exemplo de uso da função strtolower()</p>");
        $nome="Osvaldo Martins Torquati";
        Echo "<p> Nome: $nome </p>";
        $nome2=strtolower($nome);
        print("Seu nome usando strtolower() é ".$nome2);
        echo "<br/>";
        echo "<br/>";
        //Converte a String para maíusculas
        $nome2=strtoupper($nome2);
        print("Seu nome usando strtoupper() é ".$nome2);
    ?>
    </div>
</body>
</html>