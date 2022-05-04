<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
  $sitekey = $_POST['sitekey'];
  $sitevalue = $_POST['sitevalue'];


  if ($sitekey != "" && $sitevalue != "") {
    // if($password==$confirm_password)
    // {
    $category_query = "INSERT INTO siteconfigs(sitekey, sitevalue) VALUES('$sitekey','$sitevalue')";
    $category_result = mysqli_query($conn, $category_query);
    if ($category_result) {
      echo header('Location:../managesiteconfig.php');
    } else {
    }
    // }
    // else 
    // {
    //     echo "Confirmation Password doesn't match.";
    // }
  } else {
    echo "All fields are necessary.";
  }
}
