<?php
include("connect.php"); 
echo $id=$_REQUEST['id'];
echo $del="delete from quiz1 where quizID='$id'";
mysqli_query($con,$del);
header("location:fetch1.php");
?>