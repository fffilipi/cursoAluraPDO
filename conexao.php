<?php

$caminhoBanco = __DIR__ . 'banco.sqlite';

$pdo = new PDO('sqlite:' . $caminhoBanco);

//'mysql:host=endereco_do_servidor;dbname=nome_do_banco'

echo 'conectado';