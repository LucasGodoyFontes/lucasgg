<?php
$vetn = ["Lucas","jao","vini" ] ;
print_r($vetn);


if (in_array("Lucas",$vetn)) {
    echo "<br>achei";
} else {
    echo"cadê tu";
}

array_push($vetn ,"vitor","diego");
print_r($vetn);

array_shift($vetn);
echo "<br>";
print_r($vetn);

sort($vetn);
echo "<br>";
print_r($vetn);








