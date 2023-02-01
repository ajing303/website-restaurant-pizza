<?php

$mysqli = new mysqli("localhost","root","","baocao");

// kiem tra 
if ($mysqli->connect_errno) {
  echo "Kết nối Mysqli thất bại: " . $mysqli->connect_error;
  exit();
}
?>