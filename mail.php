<?php

$recepient = "pacorabbane19@gmail.com";
$sitename = "ShafaMebell";

if (isset($_POST)) {
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $message = "Имя: $name \nТелефон: $phone";

    $pagetitle = "Новая заявка с сайта $sitename";
    $resMail = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n ");
    printf($resMail);
    if ($resMail !== TRUE)
{
  echo "Письмо не отправлено";
  exit;
}
echo "Письмо отправлено";
}
?>
