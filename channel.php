<?php
// Получаем список каналов из секрета MY_CHANNELS (переменная окружения)
$envChannels = getenv('MY_CHANNELS');

if ($envChannels) {
    // Разбиваем по строкам, убираем пустые и лишние пробелы
    $telegramChannelURLs = explode("\n", trim($envChannels));
    $telegramChannelURLs = array_map('trim', $telegramChannelURLs);
    $telegramChannelURLs = array_filter($telegramChannelURLs);
} else {
    // Если секрет не задан – используем запасной список (можно оставить пустым)
    $telegramChannelURLs = [
        'https://t.me/some_public_channel_1',
        'https://t.me/some_public_channel_2',
    ];
}
// Никакого return! Просто оставляем переменную определённой
?>
