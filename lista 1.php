<?php 

$vetN = [ 1,2,3,4,5];
print_r  ($vetN);

$soma = array_sum ($vetN);

echo "<br> soma {$soma} ";

$maior = max($vetN);
echo "<br> maior numero {$maior} ";


if ( in_array(9, $vetN) ) {
    echo "<br> achei";
} else {
    echo "<br>cadê tu ";
}
array_pop($vetN);
echo" <br>";
print_r($vetN); 








