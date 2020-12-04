<?php

$result = mail("trener.sambo@ya.ru","Анекта с сайта","C сайта получена АНКЕТА с данными:\nИмя: $_POST[Name] \nЭлАдрес: $_POST[email]\nТекстСообщения: $_POST[text] ");

if($result) {
echo "<p>Письмо тренеру отправлено успешно!</p>";	
}
else {
echo "<p>Письмо не отправлено:-( </p>";	
}
?>