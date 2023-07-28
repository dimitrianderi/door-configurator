<?php

require './../vendor/autoload.php';
/** @var int $id */
/** @var str $token */
/** @var str $chat_id */

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

$caption = ($id) ? "Заказ № $id" : 'Заказ двери от ' . date('Y-m-d H:i:s');

sendPdfToTelegram($token, $chat_id, $pdfFilePath, $caption);
