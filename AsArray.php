<?php
$product = array("Чайник" => 500, "Сковородка" => 300, "Кастрюля" => 400);
$product['Ложка'] = 50;
$product['нож'] = 100;
asort($product);
foreach($product as $item => $item_count) {
    echo "Название продукта:" . $item . "  -Цена:" . $item_count.'<br/>';
   
  }
echo "Количество продуктов-".count($product)."<br/>";
echo "Их общая сумма-".array_sum($product);
?>