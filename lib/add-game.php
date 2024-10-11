<?php
    $image = trim(filter_var($_POST['image'], FILTER_SANITIZE_SPECIAL_CHARS));
    $followers = trim(filter_var($_POST['followers'], FILTER_SANITIZE_SPECIAL_CHARS));

    if(strlen($image) < 3) {
        echo "Image's directory must have 4 or more characters";
        exit;
    }
    if(strlen($followers) < 1) {
        echo "Followers error";
        exit;
    }

     //DB
     require "db.php";

     //SQL
    $sql = 'INSERT INTO trending(image, followers) VALUE(?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$image, $followers]);

    header('Location: /trending.php');