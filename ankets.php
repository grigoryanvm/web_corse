<?php
echo <<<HTML
<html> 
    <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" type="text/css">
  <title> Анкета программиста </title>
  <body>
  <h2><center>Анкета программиста</center></h2>
 
<form name="form" action="anketa.php" method="post">
 
<p><b>1.Пол:</b></p>
<p><input  name="sex" type="radio" value="P1">Мужской<br>
<input name="sex" type="radio" value="P2">Женский<br></p>
 
<p><b>2.Имя:</b></p>
<p><input  name="name" type="text"> <br><br>

<p><b>3.Дата рождения:</b></p>
<p><input  name="data" type="date" value="2002-02-22"> <br><br>

<p><b>4.Какие языки программирования вы знаете?</b></p>
<input type="checkbox" name="language" value="1" >Java <br />
<input type="checkbox" name="language" value="2" >C# <br />
<input type="checkbox" name="language" value="3" >C++ <br />
<input type="checkbox" name="language" value="4" >Python<br />
<input type="checkbox" name="language" value="5" >JavaScript<br />
<input type="checkbox" name="language" value="6" >Php<br />
<input type="checkbox" name="language" value="7" >HTML/Css<br />

<p><b>5.Сколько лет вы занимаетесь программированием?</b></p>
<p><input name="years" type="radio" value="1">1-3<br>
<input name="years" type="radio" value="2">3-5<br>
<input name="years" type="radio" value="3">>5<br><br>
<input type="submit" name="submit" value="Обработка">
</body>
</html>
HTML;

