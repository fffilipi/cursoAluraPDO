<?php

$databasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);
//'mysql:host=endereco_do_servidor;dbname=nome_do_banco'
echo 'conectado';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');