<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<style type="text/css">
.body-content .module .form a {
	font-size: 36px;
	color: #0F0;
}
.b {
	text-align: left;
	color: #F00;
}
</style>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>questions</title>
</head>

<body><center>
<h1>C Questions<a href="http://localhost/projectBCA/question%20entery/EDITMAIN.PHP" class="b"><br> BACK</a></h1>
<table width="1200" border="1">
  <tr>
    <td width="116">Sr. No.</td>
    <td width="225">Questions</td>
    <td width="163">Choice 1</td>
    <td width="100">Choice 2</td>
    <td width="188">Choice 3</td>
    <td width="255">Answer</td>
    <td width="107">Delete</td>
  </tr>
  <?php 
  include("connect.php");
  $sel="select * from quiz";
  $rec=mysqli_query($con,$sel);
  $a=0;
  while ($res=mysqli_fetch_array($rec))
  {
	  $a++;
  ?>
  <tr>
    <td><?php echo $a; ?></td>
    <td><?php echo $res['question'];?></td>
    <td><?php echo $res['choice1'];?></td>
    <td><?php echo $res['choice2'];?></td>
    <td><?php echo $res['choice3'];?></td>
    <td><?php echo $res['answer'];?></td>
    <td><a href="delete.php?id=<?php echo $res['quizID']?>"><input type="button" name="button" id="button" value="Delete" /></a></td>
  </tr>
  <?php } ?>
</table></center>
</body>
</html>
