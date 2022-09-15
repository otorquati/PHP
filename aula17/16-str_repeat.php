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
        // Str_repeat($str,n) repete a string n vezes).
        Echo ("<p>Exemplo de uso da função str_repaet()</p>");
        $nome="Osvaldo";
        $n=5;
        Echo "<p> Nome: $nome </p>";
        $novo=str_repeat($nome,$n);
        print("Repetindo $nome , $n vezes = $novo");
        echo"<br/>";
    ?>
    </div>
</body>
</html>