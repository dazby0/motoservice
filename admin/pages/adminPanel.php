<?php
  require('../../backend/config.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../../styles/services.css" />
    <link rel="stylesheet" href="../../styles/adminPanel.css" />
    
  </head>
  <body>
    <div class="banner"></div>
      <header>Usługi MOTO-KRZYŚ</header>
    </div>

    <div class="services">
    <?php 
        $selectVehicles = 'SELECT * FROM vehicles';
        $vehicles = $conn -> query($selectVehicles);

        while($row = $vehicles->fetch_assoc()) {
          echo '<div class="service">';
            echo '<img src='.$row['img_src'].' alt="pic" width="230px" height="230px" />';
            echo '<h4>'.$row['model'].'</h4>';
            echo '<p>'.$row['prod_year'].'</p>';
            echo '<h5>'.$row['status'].'</h5>';
            echo '<p>Właściciel: '.$row['owner'].'</p>';
            echo '<form action="../backend/changeStatus.php" method="post">';
              echo '<input class="invisble" type="text" name="model" value="'.$row['model'].'" />';
              echo '<input class="change" type="submit" value="ZMIEŃ STATUS" />';
            echo '</form>';
          echo '</div>';
        }
      ?>
    </div>
  </body>
</html>

