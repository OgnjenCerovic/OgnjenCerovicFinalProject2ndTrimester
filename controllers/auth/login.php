<?php

require('Validator.php');
$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = $db->query('SELECT * FROM user WHERE username = :username AND password = :password', [
        'username' => $_POST['username'],
        'password' => $_POST['password']  
    ])->find();

    if ($user) {
        $_SESSION['user'] = [
            'username' => $user['username'],
            'name' => $user['FullName'],
            'id' => $user ['UserID']   
        ];

        header('Location: /home');
        exit();
    } else {
        
        $_SESSION['error'] = 'Invalid username or password';
        header('Location: /');
        exit(); 
    }
}


require './views/auth/Login.view.php';
