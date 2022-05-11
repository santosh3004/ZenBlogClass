<?php

require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="update `siteconfigs` set `deleted_at`= SYSDATE() where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../managesiteconfig.php");
  }
  else{
    echo "Error";
  }
}
?>