<?php
        $dbPath = __DIR__ . '/banco.sqlite';
        $pdo = new PDO("sqlite:$dbPath");       
        // Insere no BD a seguinte URL e título
        $sql = 'INSERT INTO mensagens (name, email, subject, menssage) VALUES (?, ?, ?, ?)';

        // Envia os seguintes POSTS para o BD
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $_POST['name']);
        $statement->bindValue(2, $_POST['email']);
        $statement->bindValue(3, $_POST['subject']);
        $statement->bindValue(4, $_POST['message']);
        
        // Obtém e valida o email e a senha da requisição POST
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $result = $statement->execute();

        if ($statement->execute() === false) {
          header('Location: /index.php?sucess=0');
        } else {
          header('Location: /index.php?sucess=1');
        }