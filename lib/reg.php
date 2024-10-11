<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
   
    if(strlen($login) < 2) {
        echo "Login must have 4 or more characters";
        exit;
    }
    if(strlen($username) < 2) {
        echo "Username must have 2 or more characters";
        exit;
    }
    if(strlen($email) < 2 && !str_contains($email, '@')) {
        echo "Email must have 4 or more characters";
        exit;
    }
    if(strlen($password) < 2) {
        echo "Password must have 4 or more characters";
        exit;
    }

    //PASSWORD
    $salt = 'mama';
    $password = md5($salt.$password);

    //DB
    require "db.php";

    //SQL
    $sql = 'INSERT INTO users(login, username, email, password) VALUE(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $username, $email, $password]);

    header('Location: /about.php');

    //INSERT