<?php
echo <<<HTML
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br><br>
Address: <input type="text" name="address"><br><br>
E-mail: <input type="text" name="email"><br><br>
Pasword: <input type="text" name="password"><br>
<input type="submit">
</form>
HTML;
?>