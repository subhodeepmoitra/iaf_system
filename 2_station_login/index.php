<?php
     include('login.php'); // Includes Login Script
     if(isset($_SESSION['login_user'])){
          header("location: admin_portal.php"); // Redirecting To Profile Page
        }
?>
<!DOCTYPE html>
   <html>
       <head>
          <title>Login Form in PHP with Session</title>
          <link href="style.css" rel="stylesheet" type="text/css">
       </head>
    <body>
        <div id="login">
              <h2>INDIAN AIR FORCE STATION LOGIN</h2>
              <form action="" method="post">
                  <label>Station ID :</label>
                  <input id="name" name="username" placeholder="station ID" type="text">
                  <label>Password :</label>
                  <input id="password" name="password" placeholder="**********" type="password"><br><br>
                  <input name="submit" type="submit" value=" Login ">
                  <span><?php echo $error; ?></span>
              </form>
        </div>
    </body>
</html>