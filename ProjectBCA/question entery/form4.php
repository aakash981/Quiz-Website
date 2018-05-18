<?php
include('connect.php');
echo $q=$_POST['question'];
echo $c1=$_POST['choice1'];
echo $c2=$_POST['choice2'];
echo $c3=$_POST['choice3'];
echo $a=$_POST['answer'];
echo $insert="insert into quiz4(question,choice1,choice2,choice3,answer)values('$q','$c1','$c2','$c3','$a')";
$result=mysqli_query($con,$insert);
if($result)
header("location:que_entry4.php");
?>
<script type="text/javascript">
alert("ok");
</script>
<?php
exit;
?>






