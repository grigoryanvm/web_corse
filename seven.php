<?php
echo <<<HTML
<h2>Григорян Вероника - веб.разработчик</h2>
<p> Студентка 3 курса фспо специальности " Информационные ситестемы и программирование"<br>
    Начальные знания HTML,CSS,PHP.<p>
HTML;
$n = 1000;

$sum=0;
$primer = array();
//while(array_sum($primer)>$n){
      for ($i = 0; $i < 10; $i++) {
        $primer[$i] = rand(0, 100);
        echo $primer[$i].'<br/>';
        }
  
//}
?>