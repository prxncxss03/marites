<?php

$conn = mysqli_connect('localhost', 'root', '', 'marites');

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
