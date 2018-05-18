<?php
 echo $username=$_POST['mail'];
 echo $password=md5($_POST['password']);
  $i=check($username,$password);
  if($i==1)
  {
 header("location:password.php?msg=<p style='font-size:100%;font-family:times new roman;'>Sorry..!! incorrect username</p>");
  }
  if($i==2)
  {
  session_start();
   $_SESSION['admn']=$username;
  header("location:editmain.php");
  }
   if($i==3)
  {
  header("location:password.php?msg=<p style='font-size:100%; font-family:times new roman;'>Sorry..!! incorrect password</p>");
  }
function check($u,$p)
{
include("connect.php");
echo $query="select password from login where mail='$u'";
$res=mysqli_query($con,$query)or die("failed");
$cn=mysqli_num_rows($res);
if($cn==0)
{
return 1;
}
else
{
$rec=mysqli_fetch_array($res);
if($rec[0]==$p)
{
return 2;
}
else
{
return 3;
}
}

}
?>
