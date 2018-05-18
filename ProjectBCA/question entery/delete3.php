<?php
include("connect.php"); 
echo $id=$_REQUEST['id'];
echo $del="delete from quiz3 where quizID='$id'";
mysqli_query($con,$del);
header("location:fetch3.php");
?>