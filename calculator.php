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
if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];}

?>