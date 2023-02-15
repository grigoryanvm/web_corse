<?php
echo <<<HTML
<form action="" method="post" >
Первое число <input type="text" name="number1" > 
    <select  name="operation"> 
        <option value='plus'>+ </option>
        <option value='minus'>- </option>
        <option value="multiply">* </option>
        <option value="divide">/ </option>
    </select>
    Второе число <input type="text" name="number2"> 
         
    <input  type="submit" name="submit" value="Расчитать">
    </form>
HTML;


?>