<?php
$username = $_POST['username'];
$usernumber = $_POST['usernumber'];

echo $username;
echo "<br>";
echo $usernumber;
if (mail("rubashko.artem@mail.ru", "Заявка с сайта", "Имя:".$username.". Номер телефона: ".$usernumber ,"From: shafamebell.by \r\n"))
 {     echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}?>