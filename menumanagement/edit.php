<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
  $title=$_POST['title'];
  $id=$_POST['id'];
  $url=$_POST['url'];
  $order=$_POST['order'];
  $status=$_POST['radio1'];
  $query="UPDATE menus SET title='$title', url='$url', order_id='$order', status='$status' WHERE id='$id'";
  $result=mysqli_query($conn,$query);
  if($result){  
  header("Location:../managemenu.php");
  }
  else{
    echo "Error"; 
  }}

?>