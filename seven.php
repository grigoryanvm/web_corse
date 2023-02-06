<?php
echo <<<HTML
<h2>Григорян Вероника - веб.разработчик</h2>
<p> Студентка 3 курса фспо специальности " Информационные ситестемы и программирование"<br>
    Начальные знания HTML,CSS,PHP.<p>
HTML;
$n = 100;

$sum=0;
$primer = array();
$number;
do {

    for ($i = 0; $i > count($primer);$i++) {
        $number.rand(0, 50);
        $primer = [$i];
        $sum += $number;
        echo $primer[$i] . '<br/>';

    }
}
while ($sum <= $n);
echo  "Sum : ".array_sum($primer);

?>