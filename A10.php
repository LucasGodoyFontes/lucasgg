
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema de reajuste de salario </h1><br><br>

   <form action="" method="post">
    <label for="">informe o reajuste:</label><br><br>
    <input type="text" name="salario" id="">
    <input type="submit" value="calcular reajuste">


        </form> 
</body>
</html>



<?php


$salarioreaju = reajustesalario($_POST['salario']);
echo"<h2>" . $salarioreaju . "</h2>";

function reajustesalario($salario)
{
    $salariominimo= 1320 ;
    $salrea= 0;

    if ($salario <= $salariominimo) {
        $salrea = $salariominimo * 1.10;
    }

     if ( $salario > $salariominimo AND $salario <= 3 * $salariominimo) {
        $salrea = $salario * 1.05;
     }

     if ( $salario > 3 * $salariominimo) {
        $salrea = $salario * 1.03;
     }

     return $salrea;


    }



?>




















