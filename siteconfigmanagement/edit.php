<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
  $oldsitekey=$_POST['oldsitekey'];
  $sitekey = $_POST['sitekey'];
  $sitevalue = $_POST['sitevalue'];
  $status=$_POST['radio1'];
  $query="update siteconfigs set sitevalue='$sitevalue',sitekey='$sitekey',status=$status where sitekey='$oldsitekey'";
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