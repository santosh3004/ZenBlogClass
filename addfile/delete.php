<?php
require('../connection/config.php');
$id=$_GET['id'];

$q="SELECT link FROM filemanager WHERE id=$id";
$r=mysqli_query($conn,$q);
$row=$r->fetch_assoc();
$filename=$row["link"];
$filedel="../uploads/".$filename;
unlink($filedel);



$query="DELETE FROM filemanager WHERE id=$id";
$result=mysqli_query($conn,$query);
if($result) {
 	/*while updating and just showing same page
 	reloading same page
 	echo "<meta http-equiv='refresh' content='0'>";*/
 echo header("Location: ../managefile.php?msg=success");
 }
 else
 {
echo header("Location: ../managefile.php?msg=success");
 }

 ?>
