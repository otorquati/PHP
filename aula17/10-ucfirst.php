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
        // Converte a primeira letra da String para maiúscula
        Echo ("<p>Exemplo de uso da função ucfirst()</p>");
        $nome="osvaLdo torquAti ";
        Echo "<p> Nome: $nome </p>";
        $nome2=ucfirst($nome);
        print("Seu nome usando ucfirst() fica assim: ".$nome2);
        echo "<br/>";
        echo "<p>Para deixar apenas 1 letra em maiúscula";
        echo "<br/>";
        $nome2=ucfirst(strtolower($nome));
        print("Seu nome usando ucfirst() fica assim: ".$nome2);
        echo "<br/>";
        //Converte a 1° letra de cada String para maíusculas
        $nome2=ucwords($nome2);
        echo "<br/>";
        print("Seu nome usando ucwords() é <strong>".$nome2." </strong> com apenas as primeiras letras de cada palavra em maiúsculas");
    ?>
    </div>
</body>
</html>