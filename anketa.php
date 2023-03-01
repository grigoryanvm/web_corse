<?php
$Err="";
$sex=$name=$data=$language=$years="";
if(isset($_POST['submit'])){
    if (empty($_POST['sex'])|| empty($_POST['name'] ) || empty($_POST['data'])){
        echo $sexErr=" Заполните все поля";

    }
    else{
        $name =$_POST['sex'];
        $name =$_POST['name'];
        $data =$_POST['data'];
        $langyage=$_POST['language'];
        $years =$_POST['years'];
}


}



echo count($_POST['language']);
echo $sex;
?>