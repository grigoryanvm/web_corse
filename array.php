<?php
$list = array("odin", "dva", "tri", "chetire","puat");
$list[5] = "shest";
$list[6] = "sem";
sort($list);
count($list);
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i].'<br/>';
    }
echo "Масивв содержит ".count($list)." элементов";

?>