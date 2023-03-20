<?php
$file = fopen('chat.txt','a+')
$messages = []; // Массив для считывания построчно
while (!feof($file)) { // пока не достигли конца файла 
    $messages[] = fgets($file); // мы читаем построчна файл помещая в массив
}

var_dump ($messages); // отладочная функция выводит структуру данных

echo $messages[0]; // извлекает по ключу строчку в 0 строке
$messages = array_reverse($messages); // развернуть все сообщения

foreach($messages as $str) {
    echo $str; // Вывод построчно но ограниченно и если будут добавляться в chat.txt строка, то
}              // выводиться будет сверху

foreach($messages as $key -> $str) { // в попадает key число, а в str значение
    echo $str;
    if ($key >= 4) break;
} 
//Задавать вручную массив при изменении ключа и его значения
$messages = [
    1,
    2=>2,
    'текст'
]