<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  http-equiv  = "refresh" content = "0, URL=..\index.html" >
    <title>Document</title>
</head>
<body>
    <?php
    //Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
    $name = $_GET['name']; // Вытаскиваем имя в переменную
    $number = $_GET['number']; // Вытаскиваем почту в переменную
    $rating = $_GET['rating'];
    $review = $_GET['review'];
    $message =
    Номер телефона: $number <br>
    Оценка: $rating <br>
    Отзыв: $review"; // Формируем сообщение, отправляемое на почту
    $to = "xaski_2000@mail.ru"; // Задаем получателя письма
    $from = "noreply-site.web.cofp.ru"; // От кого пришло письмо
    $subject = "Отзыв с вашего сайта"; // Задаем тему письма
    $headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
    mail($to, $subject, $message,
    "Имя: $name <br> $headers)
?>
</body>
</html>

