<?php
require 'vendor/autoload.php';

echo "Проверка существования функции: ";
var_dump(function_exists('BrainGames\Cli\hello'));

echo "\nПопытка вызвать функцию:\n";
try {
    \BrainGames\Cli\hello();
} catch (Throwable $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}
