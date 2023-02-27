<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'motoservice';

    $conn = new mysqli($host, $user, $password, $db);

    if($conn) echo 'dziala';
    else echo 'nie dziala';  