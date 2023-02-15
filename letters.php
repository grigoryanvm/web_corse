<?php
echo <<<HTML
<form action="letters.php" method="post">
To <input type="text" name="to"><br><br>
Subject <input type="text" name="subject"><br><br>
Message <input type="textarea" name="message"><br><br>
<input type="submit" name="mail_ok">
</form>


HTML;
?>