<?php
    require('./config.php');
    session_start();
  
    if(isset($_SESSION['logged'])) {
      $owner = $_SESSION['logged'];
    }
    else { 
      echo "wyjebalo cos";
    }

    $model = $_POST['model'];
    $year = $_POST['prod_year'];
    $img_src = $_POST['img_src'];
    $status = $_POST['status'];

    $insertVehicleSql = 'INSERT INTO vehicles(model, prod_year, status, img_src, owner) VALUES("'.$model.'", '.$year.', "'.$status.'", "'.$img_src.'", "'.$owner.'")';
    $insertVehicle = $conn -> query($insertVehicleSql);

    header('Location: ../client/vehicles.php');