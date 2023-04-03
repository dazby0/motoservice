<?php
    require('./config.php');
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $selectAdminsSql = "SELECT login, password FROM users WHERE login='".$login."'";
    $selectAdmins = $conn -> query($selectAdminsSql);

    if($selectAdmins->num_rows > 0) {
      $row = $selectAdmins -> fetch_assoc();

      // echo password_hash('admin', PASSWORD_BCRYPT);

      if(password_verify($password, $row['password'])) {
        $_SESSION['logged'] = $login;
        header('Location: ../client/services.php');
      }
      else {
        header('Location: ../client/login.html');
      }
    }
    else {
        header('Location: ../client/login.html');
    }