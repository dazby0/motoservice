<?php
    require './config.php';
    session_start();

    $login = $_POST['login'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $passed = true;

    if (strlen($login) < 3) $passed = false;
    $checkLoginsSql = "SELECT login FROM users WHERE login='$login'";
    $checkLogin = $conn -> query($checkLoginsSql);

    if($checkLogin->num_rows > 0) $passed = false;

    if (($password1 !== $password2)) $passed = false;
    else if(strlen($password1) < 3) $passed = false;
    else $passwordHashed = password_hash($password1, PASSWORD_DEFAULT);

    if ($passed === true) {
        $insertUserSql = "INSERT INTO users(login, password) VALUES('$login', '$passwordHashed')";
        $insertUser = $conn -> query($insertUserSql);
        header('Location: ../client/login.html');
    }
    else echo 'wyjebalo cos';