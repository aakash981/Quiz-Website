<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Quiz</title>

    <style type="text/css">
<!--
.style4 {font-size: 20px; color: #0000FF; }
.style8 {color: #000066}
.a {
	color: #F00;
}
-->
    </style>
</head>
<body>

<center><p><img src="Capture.PNG" width="952" height="78"></p></center>

<a href="http://localhost/projectBCA/question%20entery/index.php" class="a">
	<H1>&nbsp;&nbsp;&nbsp;&nbsp;  BACK</H1>
     </a>
  <center><h1>Play the Quiz!</h1></ceneter>
    <center>
    <form method="post" action="result_display.php">
       <?php
	   error_reporting(0);
	   include("connect.php");
	   $fetch="select * from quiz";
	   $query=mysqli_query($con,$fetch);
	   $count=mysqli_num_rows($query);
	   $ran=rand(0,$count);
	   $a=$count-$ran;
	   if($a<10)
	   {
	   $rec="select * from quiz where quizID <'$ran' limit 10";
	   }
	   else
	   {
	   $rec="select * from quiz where quizID >'$ran' limit 10";
	   }
	   $sel=mysqli_query($con,$rec);
	   $t=0;
	  while($row=mysqli_fetch_array($sel))
	   {
	   $t++;
	   ?>
      <table width="1000" border="1">
      <tr>
        <td bgcolor="#99CCCC"><p><strong>Q.<?php echo $t; ?> <?php echo $row[1];?></strong></p>
            <span class="style8">
            
            
          <?php $ans_array = array($row[2], $row[3], $row[4], $row[5]);
	shuffle($ans_array); ?>
            
            
            <input type="radio" name="r<?php echo $row[0]?>[]" value="<?=$ans_array[0]?>" required>
             <?=$ans_array[0]?><br>
            
            <input type="radio" name="r<?php echo $row[0]?>[]" value="<?=$ans_array[1]?>" required>
             <?=$ans_array[1]?><br>
            <input type="radio" name="r<?php echo $row[0]?>[]" value="<?=$ans_array[2]?>" required>
             <?=$ans_array[2]?><br>
            <input type="radio" name="r<?php echo $row[0]?>[]" value="<?=$ans_array[3]?>" required>
             <?=$ans_array[3]?></span>
            <input type="hidden" name="id[]" value="<?php echo $row['0']?>" id="textfield">
        </td>
      </tr>
    </table>
    <p class="style4">
      <?php } ?>
    </p>
    <p>
    <input type="submit" class="style4" value="Submit">
    </p>
   </form></center>
</div>

</body>

<body bgcolor="#CCCCFF">
</html>