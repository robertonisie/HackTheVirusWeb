<?php 
include('/db/server.php');
include('/db/errors.php');      
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="login.css" rel="stylesheet" type="text/css" media="all" href="css/login.css" />
</head>

<div class="login-page">
    <form class="login-form">
      <input type="text" name="email" placeholder="Email" required/>
      <input type="password" name="password" placeholder="Password"/>
      <button type="submit" name="login_user">login</button>
      <p class="message">Not yet a member? <a href="SignUp.html">Create an account</a></p>
    </form>
  </div>
</div>
</html>