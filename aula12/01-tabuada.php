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
      <form method="get"action="02-tabuada.php">
        <select name="num" >
        <?php 
          for($c=1; $c<=10; $c++){
            echo "<option>$c</option>";
          }
        ?>
        </select>
        <input type="submit" name="" value="Tabuada">  
      </form>
    </div>
</body>
</html>