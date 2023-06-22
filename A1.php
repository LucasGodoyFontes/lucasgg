<?php
$nome = $_POST['nome'];
$sebrenome = $_POST['apelido']; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula html</title>
</head>
<body>
    <form method="post" action=""> 
        <label >Nome:</label><br>
        <input type="texto"name="nome"id="nome"><br>
        <label for="">apelido:</label><br>
        <input type="text" name="apelido" id="apelido"><br>
        <input type="submit" value="enviar dados"><br>
        
    </form>
</body>
</html>

<?php



 
echo "nome completo : {$nome} {$apelido}";

























?>









