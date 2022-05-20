<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/g..,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$text = $_POST['user_text'];
$token = "5280006076:AAFUZRRMNycSL8s58YHncP7K9QclkJmHzAE";
$chat_id = "-546766448";
$arr = array(
'Имя пользователя: ' => $name,
'Телефон: ' => $phone,
'Сообщение' => $text
);

foreach($arr as $key => $value) {
$txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
echo 'Сообщение отправлено.';

header('Location: ../registrarion.php');
} else {
echo "Error";
}
?>