
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<style type="text/css">
.body-content .module .form a {
	font-size: 36px;
	color: #F00;
}
</style>
<div class="body-content">
  <div class="module">
    <h1>Enter questions for Graphic</h1>
    <form class="form" action="form2.php" method="post" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="question" name="question" required />
      <input type="text" placeholder="choice1" name="choice1" required />
      <input type="text" placeholder="choice2" name="choice2" required />
      <input type="text" placeholder="choice3" name="choice3" required />
      <input type="text" placeholder="answer" name="answer" required />
      
      
      
     <input type="submit" value="submit" name="register" class="btn btn-block btn-primary" />
   
   <?php 
   if(isset($_GET['msg']))
   echo $_GET['msg'];
   ?>
 
   <BR> <a href="http://localhost/projectBCA/question%20entery/EDITMAIN.PHP">BACK</a>
    </form>
  </div>
</div>

