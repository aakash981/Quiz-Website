
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>login</h1>
    <form class="form" action="logincode_admin.php" method="post" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="email" placeholder="Enter E-Mail Id" name="mail" required />
      <input type="password" placeholder="Enter Password" name="password" required />
      <input type="submit" value="submit" name="register" class="btn btn-block btn-primary" />
   
   <?php 
   if(isset($_GET['msg']))
   echo $_GET['msg'];
   ?>
 
    </form>
  </div>
</div>

