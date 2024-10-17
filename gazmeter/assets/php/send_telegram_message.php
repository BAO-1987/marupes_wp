<?php
// Получение сообщения из POST-запроса
$message = isset($_POST['message']) ? $_POST['message'] : '';

if (!empty($message)) {
  // Отправка сообщения в Telegram (замените YOUR_TELEGRAM_BOT_TOKEN и YOUR_TELEGRAM_CHAT_ID на соответствующие значения)
  $botToken = '6372239113:AAFdPQP3HM6ruUnG2xxxfs0XHA00Dfz5X2k';
  $chatId = '745616671';
  $apiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendMessage';

  $params = [
    'chat_id' => $chatId,
    'text' => $message,
  ];

  $curl = curl_init($apiUrl);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
  $response = curl_exec($curl);
  curl_close($curl);
}
