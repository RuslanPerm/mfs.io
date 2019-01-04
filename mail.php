<?php
$to = "manfuckschool@mail.ru"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "ФИО: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['mail']."<br>"; //полученное из формы name=email
$message .= "Size: ".$_POST['size']."<br>";
$message .= "address: ".$_POST['address']."<br>";
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
<!--$f = $_POST['f'];
$i = $_POST['i'];
$o = $_POST['o'];
$size = $_POST['size'];
$email = $_POST['mail'];
$address = $_POST['address']
$message = $_POST['message']-->