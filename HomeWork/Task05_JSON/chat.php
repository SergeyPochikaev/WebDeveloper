<?php
$pdo = new PDO('sqlite:chat.bd');
if (isset($_POST['message']) && !empty($_POST['message'])) {
    $message =strip_tags($_POST['$message']); // обрезать тег

    $statement = $pdo->prepare(
        'INSERT INTO messages (message) VALUES (?)'
    )

    $statement->execute([$message])

    $result = [
        'status' => 'ok',
    ];
    echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    die(); //точка останова
}
//Выполнить сохранения запроса в БД - для улучшения скорости
$statement = $pdo->prepare(
    'SELECT*FROM messages ORDER BY id desc LIMIT 10' //ORDER - отсортировка в обратном порядке
)
//выполнить сам запрос
$statement->execute()

//Извлекаем данные
$messages = $statement->fetchAll(PDO::FETCH_ASSOC);//получить виде ассоативного массива

$result = [
    'status' => 'ok',
    'messages' => $messages
];

echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);