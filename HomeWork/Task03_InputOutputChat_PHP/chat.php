<?php
$file = fopen('chat.txt','a+')
//var_dump ($_GET); // отладочная функция глобального массива

// Необходимо записать условия передачи messages
if (isset($_GET['$messages'])) {
    $messages =strip_tags($_GET['$messages']); // обрезать тег
    fputs($file,$messages."\n");
    echo "ok";
    die(); //точка останова
}


$messages = []; // Массив для считывания построчно
while (!feof($file)) { // пока не достигли конца файла 
    $messages[] = fgets($file); // мы читаем построчна файл помещая в массив
}




$messages = array_reverse($messages); // развернуть все сообщения

foreach($messages as $key => $str) { // в попадает key число, а в str значение
    echo $str; // Вывод построчно но ограниченно и если будут добавляться в chat.txt строка, то
    if ($key >=10) break
}              // выводиться будет сверху