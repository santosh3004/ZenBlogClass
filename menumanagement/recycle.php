<?php
require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="update `menus` set `deleted_at`=null where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../managemenu.php");
  }
  else{
    echo "Error";
  }
}
?>