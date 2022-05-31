<?php

session_start();
$session_id = $_SESSION["user_id"];

if (!isset($session_id)) {
    header('location: login.php');
}
