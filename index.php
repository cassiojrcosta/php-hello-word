

<?php
use Telegram\Bot\Api;
$telegram =new Api('789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY');
$var =$telegram->getme();
foreach ($var as $key => $value) {
$telegram->sendmessage($key.$value);

}




?>
