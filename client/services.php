<?php
  require('../backend/config.php');
  session_start();
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

    <div class="info">
      <?php if($_SESSION['logged']) echo "Zalogowano jako: " . $_SESSION['logged'] ?>
    </div>

    <div class="services">
      <div class="service">
        <img
          src="../assets/ride.jpg"
          alt="Przejażdżka crossem"
          width="230px"
          height="230px"
        />
        <h4>15-minutowy przejazd crossem z zawodowcem</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
          exercitationem sit earum omnis deserunt eveniet incidunt doloremque
          reprehenderit, eligendi ex.
        </p>
        <h5>100zł</h5>
      </div>
  </body>
</html>
