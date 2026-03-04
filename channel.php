<?php
// Сначала пытаемся получить список каналов из переменной окружения MY_CHANNELS
$envChannels = getenv('MY_CHANNELS');

if ($envChannels) {
    // Разбиваем строку из переменной окружения по переводу строки
    $channels = explode("\n", trim($envChannels));
    // Удаляем пустые строки и пробелы по краям
    $channels = array_map('trim', $channels);
    $channels = array_filter($channels);
} else {
    // Если переменной нет, используем стандартный список каналов (можно оставить пустым или задать свои)
    $channels = [
        // Примеры каналов, можно оставить как есть или удалить
        'https://t.me/some_public_channel_1',
        'https://t.me/some_public_channel_2',
    ];
}

// Преобразуем в формат, который ожидает основной скрипт (например, URL каналов)
// Предполагается, что основной скрипт использует этот массив для парсинга
return $channels;
?>
