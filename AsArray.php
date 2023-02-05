<?php
$product = array("Чайник" => 500, "Сковородка" => 300, "Кастрюля" => 400);
$product['Ложка'] = 50;
$product['нож'] = 100;
foreach($product as $item => $item_count) {
    echo "Название продукта:" . $item . "  -Цена:" . $item_count.'<br/>';
  }
?>