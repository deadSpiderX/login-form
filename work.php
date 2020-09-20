<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$messege = $_POST['messege'];
echo "hellow".$name;
file_put_contents("rahim.txt",$name.$email.$phone.$messege."\n", FILE_APPEND);
exit();
?>
