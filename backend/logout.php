<?php
    session_start();
    session_unset();
    header('Location: ../client/login.php');