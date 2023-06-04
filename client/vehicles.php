<?php
  require('../backend/config.php');
  session_start();

  if(isset($_SESSION['logged'])) {
    $owner = $_SESSION['logged'];
  }
  else { 
    header('Location: ./login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your vehicles</title>

    <link rel="stylesheet" href="../styles/services.css" />
  </head>
  <body>
    <div class="banner"></div>
      <header>Usługi MOTO-KRZYŚ</header>
    </div>

    <nav>
        <a href="./services.php">Usługi</a>
        <a href="./addVehicle.html">Dodaj pojazd</a>
    </nav>

    <div class="services">
    <?php 
        $selectVehicles = 'SELECT * FROM vehicles WHERE owner="'.$owner.'"';
        $vehicles = $conn -> query($selectVehicles);

        while($row = $vehicles->fetch_assoc()) {
          echo '<div class="service">';
            echo '<img src='.$row['img_src'].' alt="pic" width="230px" height="230px" />';
            echo '<h4>'.$row['model'].'</h4>';
            echo '<p>'.$row['prod_year'].'</p>';
            echo '<h5>'.$row['status'].'</h5>';
          echo '</div>';
        }
      ?>
    </div>

    <footer>
      <div class="info">
        <?php echo $owner ?>
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
