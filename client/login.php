<?php
    session_start();
    if(isset($_SESSION['logged'])) {
      header('Location: ../client/services.php');
    }
    else {
      echo "";
    } 
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zaloguj się do serwisu!</title>

    <script
      src="https://kit.fontawesome.com/0a74181890.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../styles/login.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Zaloguj się</h2>
      <form action="../backend/login.php" method="post">
        <label for="loginInput">Login:</label>
        <input type="text" name="login" id="loginInput" />
        <label for="passwordInput">Hasło:</label>
        <div class="password-input">
          <input
            type="password"
            name="password"
            id="passwordInput"
            class="passwordInput"
          />
          <i class="fa-solid fa-eye show-icon"></i>
        </div>

        <div class="buttons">
          <button type="submit" class="login">Zaloguj się</button>
          <button class="register">
            <a href="register.html">Zarejestruj się</a>
          </button>
        </div>
      </form>
    </div>

    <a href="../admin/pages/login.php">ADMIN PANEL</a>

    <script src="../scripts/showPassword.js" defer></script>
  </body>
</html>
