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
        $nome="Osvaldo Martins Torquati";
        $nome2=strtolower($nome);
        print("Seu nome é ".$nome2);

        //Converte a String para maíusculas
        $nome2=strtoupper($nome2);
        print("Seu nome é ".$nome2);
    ?>
    </div>
</body>
</html>