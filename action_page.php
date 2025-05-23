<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

 mail("test@test.ru", "Запись с сайта", "$name\n $email\n $comment");

?>
