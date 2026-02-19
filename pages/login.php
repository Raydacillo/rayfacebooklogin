
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="div1">
    <h1>Login</h1>
    <form action="functions/loginFunction.php" method="POST">
        <Label for="username">Username</Label> <br>
        <input type="text" id="username" class="username" name="username"> <br> <br>
        <Label for="username">Password</Label> <br>
        <input type="password" id="password" class="password" name="password"> <br> <br>
        <button type="submit">login</button> <br>
    </div>
</form>

        
   

</body>
</html>