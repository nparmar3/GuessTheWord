<?php

//Login Page
//Login page should be as follows and works based on session. 
//If the user close the session, it will erase the session data.
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   <head>
      <title>Login </title>
      <link rel="stylesheet" type="text/css" href="GuessWordDesign.css">
      
      <style>
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         } 
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }

      </style>
      
   </head>
	
   <body>
   
      <h1>Enter Username and Password</h1> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'spongebob' && 
                  $_POST['password'] == '123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'spongebob';
                  header("Location: http://codd.cs.gsu.edu/~vnguyen70/GuessWord.php");
               }else {
                $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> 
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = _____" 
               required autofocus><br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = _____" required>
               <br> 
            <button class = "button" type = "submit" style="height:50px; width:100px"
               name = "login">Login</button>
         </form>
      </div> 
   </body>
</html>
