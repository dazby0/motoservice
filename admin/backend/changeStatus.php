<?php
    require('../../backend/config.php');

    $model = $_POST['model'];
    
    $selectSql = 'SELECT status FROM vehicles WHERE model="'.$model.'"';
    $select = $conn -> query($selectSql);
    while($row = $select->fetch_row()) {
        if ($row[0] == 'nieuszkodzony') {
            $updateSql = 'UPDATE vehicles SET status="uszkodzony" WHERE model="'.$model.'"';
            $update = $conn -> query($updateSql);
        }
        else {
            $updateSql = 'UPDATE vehicles SET status="nieuszkodzony" WHERE model="'.$model.'"';
            $update = $conn -> query($updateSql);
        }
    }

    header('Location: ../pages/adminPanel.php');