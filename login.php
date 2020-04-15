<?php 
include('/db/server.php');
include('/db/errors.php');

session_start();
if(isset($_SESSION['nume_sesiune']))
{
 header("Location: index.html");
 die("Already logged in"); 
}       
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="form">
<div class="login-page">
    <form class="login-form">
      <input type="text" name="email" placeholder="Email" required/>
      <input type="password" name="password" placeholder="Parola" required/>
      <button type="submit" name="login_user">Logare</button>
      <p class="message">Nu esti inca membru? <a href="register.php">Creaza-ti un cont</a></p>
    </form>
  </div>
</div>
</div>
<div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>