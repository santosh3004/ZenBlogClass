<?php 
if(isset($_SESSION['userid']))
{

}
else 
{
    echo header('Location: index.php?msg=invaliduser');
}
?>