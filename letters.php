<?php

$go=$_POST['mail_ok'];
if(!$go){
echo <<<HTML
<form action="letters.php" method="post">
To <input type="text" name="to"><br><br>
Subject <input type="text" name="subject"><br><br>
Message <input type="textarea" name="message"><br><br>
<input type="submit" name="mail_ok">
</form>


HTML;}
else{
    $to=$_POST['to'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $mail=mail($to,$subject,$massage);
    if($mail==true){
        echo"Письмо отправлено";
    }
    else{
        echo"Не удалось отправить";
    }
}
?>