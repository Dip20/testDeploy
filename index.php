<?php
require_once("../php/connection.php");

$exp = implode("",$_POST);
// echo $exp;

  $date_time = date("d-m-y h:i:s a");

  $sql = mysqli_query($conn,"INSERT INTO tbl_github (descr,date_time) VALUES('$exp','$date_time')");

  if ($sql)
  {
    echo "Success";
  }else
  {
      echo "Failed";
  }


?>
