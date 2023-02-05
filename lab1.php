<?php 
$price=100;
$price += $price * 0.1;
echo "Цена продукта под влиянием инфляции спустя несколько лет:";
echo $price;
echo "</br>";
while ($price<=150){
   $price+=$price*0.035;
    echo $price;
    echo"</br>";
}
$price = 100;
 
for($i = 0; $i < 6; $i++) {
    if(!$i) {
        $price += $price*0.1;
        echo "В конце года:  ".$price.'руб. <br/>';
    } else {
        $price += $price*0.035;
        echo "Через $i года(-а, лет):  ".$price.'руб. <br/>';
    }
}
?>