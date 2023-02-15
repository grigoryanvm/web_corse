<?php
echo <<<HTML
<form action="form.php" method="post">
Name: <input type="text" name="name"><br><br>
Address: <input type="text" name="address"><br><br>
E-mail: <input type="text" name="email"><br><br>
Pasword: <input type="text" name="password"><br>
<input type="submit">
</form>
HTML;
$password=311;
echo "Здравствуй  ".($_POST['name'])." </br>";
echo"Из  ".($_POST['address'])." <br>";
echo"Ваш email-  ".($_POST['email'])." <br>";
if(($_POST['password'])==$password){
    echo "Добро пожаловать";
}
else{
    echo"Пароль неверный.Попробуйте еще";
}

?>
