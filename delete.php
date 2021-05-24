<?php
require_once("config.php");
$id=$_GET['id'];
$q="delete from yasir where id=$id";
$deleted=mysqli_query($con,$q);
if(deleted){
    header("location:mohib.php");
}
else{
   echo "Not deleted";
}
?>