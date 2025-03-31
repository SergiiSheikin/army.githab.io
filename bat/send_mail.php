<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $lastName = htmlspecialchars($_POST["last-name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $data = htmlspecialchars($_POST["data"]);
    $prof = htmlspecialchars($_POST["prof"]);
    $rank = htmlspecialchars($_POST["rank"]);
    $life = htmlspecialchars($_POST["life"]);
    $message = htmlspecialchars($_POST["message"]);
    $isMilitary = isset($_POST["1"]) ? $_POST["1"] : "Не вказано";
    $isOfficer = isset($_POST["2"]) ? $_POST["2"] : "Не вказано";
    $agreement = isset($_POST["3"]) ? "Так" : "Ні";

    $to = "sheykinsergey@gmail.com"; // Вкажи свою пошту
    $subject = "Нова заявка з сайту";
    $headers = "From: no-reply@example.com\r\nReply-To: $to\r\nContent-Type: text/plain; charset=UTF-8";

    $body = "
Ім'я: $name
Прізвище: $lastName
Телефон: $phone
Дата народження: $data
Професія: $prof
Звання: $rank
Стан здоров'я: $life
Військовослужбовець: $isMilitary
Офіцерське звання: $isOfficer
Погодження на обробку даних: $agreement
Додаткова інформація: $message
";

    if (mail($to, $subject, $body, $headers)) {
        echo "Повідомлення надіслано успішно!";
    } else {
        echo "Помилка під час відправки.";
    }
} else {
    echo "Невірний метод запиту.";
}
?>
