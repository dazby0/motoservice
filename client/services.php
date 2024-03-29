<?php
  require('../backend/config.php');
  session_start();
  if(isset($_SESSION['logged'])) {
    $user = "Zalogowano jako: " . $_SESSION['logged'];
  }
  else { 
    $user = "Niezalogowano";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usługi MOTO-KRZYŚ</title>

    <link rel="stylesheet" href="../styles/services.css" />
  </head>

  <body>
    <div class="banner"></div>
      <header>Usługi MOTO-KRZYŚ</header>
    </div>

    <nav>
      <a href="./vehicles.php">Twoje pojazdy</a>
    </nav>

    <div class="services">
      <?php 
        $selectServices = "SELECT * FROM services";
        $services = $conn -> query($selectServices);

        while($row = $services->fetch_assoc()) {
          echo '<div class="service">';
            echo '<img src='.$row['img_src'].' alt="pic" width="230px" height="230px" />';
            echo '<h4>'.$row['title'].'</h4>';
            echo '<p>'.$row['description'].'</p>';
            echo '<h5>'.$row['price'].'zł</h5>';
          echo '</div>';
        }
      ?>
    </div>

    <footer>
      <div class="info">
        <?php echo $user ?>
        <?php 
          if(isset($_SESSION['logged'])) {
            echo '<a href="../backend/logout.php">Wyloguj się</a>';        
          }
        ?>
      </div>
      <p>All rights reserved &copy;</p>
      <p>Created and designed by Krzysztof Urbaniak</p>
    </footer>
  </body>
</html>
