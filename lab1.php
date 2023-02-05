<?php 
$price=100;
$price += $price * 0.1;
echo $price;
echo "</br>";
while ($price<=150){
   $price+=$price*0.35;
    echo $price;
    echo"</br>";
}
?>