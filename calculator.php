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
if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
         $error_result = 'Не все поля заполнены';
        }

        switch($operation){ // проверяем какой оператор был выбран
            case 'plus': // если выбран оператор сложения, то вычисляем сумму
                $result = $number1 + $number2; 
                break;
            case 'minus': // если выбран оператор вычитания, то вычисляем разность
                $result = $number1 - $number2;  
                break;
            case 'multiply': // если выбран оператор умножения, то вычисляем произведение
                $result = $number1 * $number2;
                break;
            case 'divide': // если выбран оператор сложения
                if( $number2 == '0') // проверям не является ли второй делитель нулевым
                $error_result = "На ноль делить нельзя!"; 
                else
                    $result = $number1 / $number2; // если второй делитель не ноль, выполняем деление
                    break;    
            }
    
?>