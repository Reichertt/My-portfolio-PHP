<?php

// Conexão com o BD
$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

// Verifica se conectou
echo 'O banco de dados foi criado com sucesso';

// Cria o BD
$pdo->exec('CREATE TABLE mensagens (id INTEGER PRIMARY KEY,  name TEXT, email TEXT, subject TEXT, menssage TEXT);');