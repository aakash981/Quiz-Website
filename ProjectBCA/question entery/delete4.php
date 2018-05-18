<?php
include("connect.php"); 
echo $id=$_REQUEST['id'];
echo $del="delete from quiz4 where quizID='$id'";
mysqli_query($con,$del);
header("location:fetch4.php");
?>