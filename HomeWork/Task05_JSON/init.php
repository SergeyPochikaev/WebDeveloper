<?php
$pdo = new PDO('sqlite:chat.bd'); //создаем БД в формате sqlite
//Выполнить SQL запрос
$pdo->exec('CREATE TABLE massages (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    massage VARCHAR(250)
)')

