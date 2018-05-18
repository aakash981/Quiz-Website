<?php
include('connect.php');
echo $name=$_POST['name'];
echo $mail=$_POST['mail'];
echo $password=md5($_POST['password']);
echo $insert="insert into login(name,mail,password)values('$name','$mail','$password')";
$result=mysqli_query($con,$insert);
if($result)
{
header("location:password.php?msg=Enter Successfully");	
}
else
{
header("location:singup.php?msg=Somthing Wrong");		
}
?>