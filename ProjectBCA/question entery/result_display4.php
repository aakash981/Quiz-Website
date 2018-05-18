<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Quiz</title>
    <style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {color: #000000}
.style5 {
	color: #009900;
	font-weight: bold;
}
-->
    </style>
</head>
<body  bgcolor="#E6E6FA">

<center><p><img src="Capture.PNG" width="952" height="78"></p></center>
<div id="container">
  <center><h1>Quiz Result !</h1></center>
    <center>
<form method="post" action="">
       <p>
         <?php
	   error_reporting(0);
	  $s=$_POST['id'][0];
	  $b=$s+9;
       $c="select * from quiz4 where quizID between $s and $b";
      include('connect.php');
	   $l=mysqli_query($con,$c);
	   $t=0;
	   $score=0;
	  while($row=mysqli_fetch_array($l))
	   {
	   $s++;
	   $t++;
	   ?>
      </p>
      <table width="1000" border="1">
      <tr>
        <td bgcolor="#CCCCFF"><p>Q.<?php echo $t;?> <?php echo $row[1];?></p>
          <p>
            <input type="radio" name="r<?php echo $row[2]?>" value="<?php echo $row[2]?>" disabled="disabled">
            <?php echo $row[2]?><br>
            <input type="radio" name="r<?php echo $row[3]?>" value="<?php echo $row[3]?>" disabled="disabled">
            <?php echo $row[3]?><br>
            <input type="radio" name="r<?php echo $row[4]?>" value="<?php echo $row[4]?>" disabled="disabled">
            <?php echo $row[4]?><br>
            <input type="radio" name="r<?php echo $row[5]?>" value=<?php echo $row[5]?>" disabled="disabled">
            <?php echo $row[5]?></p></td>
      </tr>
    </table><br>
    <table width="1000" border="1">
      <tr>
        <td bgcolor="#CC99FF"><p><span class="style1"><span class="style4"> Answers:</span><br>
              <input type="hidden" name="id" value="<?php echo $row['0']?>" id="textfield">
            <?php 
	$d="r".($s-1);
	 //echo "<pre>";
//print_r($_POST);
//echo "</pre>";
  ?>
     You Choose: <?php echo $k=$_POST[$d][0];?><br>
  </span><span class="style5"> Correct Ans: <?php echo $p= $row['answer'];?>
  <?php if($k==$p)
  $score=$score +1;
  ?>
    </span></td>
 </tr>
    </table>
    <p>
 <?php } echo  $score;?> Is Your Score out of 10 <br>You Played Well Try Again..!!   
      &nbsp;&nbsp;&nbsp; <a href="play_quiz4.php"> 
      <input name="Button" type="button" class="style5" value="Next"> 
      </a>  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="http://localhost/projectBCA/question%20entery/index.php"> 
      <input name="Button" type="button" class="style5" value="HOME"> 
      </a>      </p>
    <br><br>
</form></center>
</div>
</body>
</html>