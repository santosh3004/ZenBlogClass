<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
  $blog_id=$_POST['blog_id'];
  $id=$_POST['id'];
  $url=$_POST['img'];
  $order=$_POST['order'];
  $status=$_POST['radio1'];
  $query="UPDATE sliders SET blogs_id='$blog_id', img='$url', order_id='$order', status='$status' WHERE id='$id'";
  $result=mysqli_query($conn,$query);
  if($result){  
  header("Location:../manageslider.php");
  }
  else{
    echo "Error"; 
  }}

?>