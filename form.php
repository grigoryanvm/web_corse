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
echo "Здравствуй  ".($_POST['name'])." </br>";
echo"Из  ".($_POST['address'])." <br>";
echo"Ваш email-  ".($_POST['email'])." <br>";
?>
