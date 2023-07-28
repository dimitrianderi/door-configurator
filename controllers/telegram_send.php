<?php


require './../vendor/autoload.php';

use TelegramBot\Api\BotApi;

function sendPdfToTelegram($botToken, $chatId, $pdfFilePath, $caption = '')
{
    $botApi = new BotApi($botToken);

    try {
        $botApi->sendDocument($chatId, new \CURLFile($pdfFilePath), $caption);
        echo 'PDF-файл успешно отправлен в Телеграм';
    } catch (Exception $e) {
        echo 'Ошибка при отправке PDF-файла в Телеграм: ' . $e->getMessage();
    }
}

$pdfFilePath = __DIR__ . '/../assets/path/door_order.pdf';

$botToken = '6603662089:AAEbXRxDepKOtv0Qn6GvrSwARlG5AkwiXQc';

$chatId = '-985732401';

$caption = ($id) ? "Заказ № $id" : 'Заказ двери от ' . date('Y-m-d H:i:s');

sendPdfToTelegram($botToken, $chatId, $pdfFilePath, $caption);
