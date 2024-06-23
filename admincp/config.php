<?php
  $mysqli = new mysqli("localhost","root","","khanhsql");

  // Check connection
  if ($mysqli -> connect_errno) {
    echo "Kết nối MySQL không thành công : " . $mysqli -> connect_error;
    exit();
  }
?>