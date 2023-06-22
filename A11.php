<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aclerison</title>
</head>
<body>
    
<h1>O formulario</h1><br>

    <form action="" method="post"> 
    <label for="O botão"></label>
    <input type="text" name="botão" id="">
    <input type="submit" value="Botão">

</form>






</body>
</html>



<?php  

function dados($batao)
{
    return $batao;
}


echo "<br>". dados($_POST ["botão"]);



