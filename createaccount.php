<?php
include "configfb.php";

$message = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        'username'   => $_POST['username'] ,
        'first_name' => $_POST['first_name'] ,
        'last_name'  => $_POST['last_name'] ,
        'email'      => $_POST['email'] ,
        'password'   => $_POST['password'] ,
        'gender'     => $_POST['gender'] ,
        'birthday'   => $_POST['birthday'] ,
        'mobile_num' => $_POST['mobile_num'] ,
    ];

    if (registerUser($data)) {
        header('Location: Facebook.php?created=1');
        exit;
    } else {
        global $lastError;
        if ($lastError === 'duplicate') {
           echo "<script> alert('Username and email already exist') </script>";
        } elseif ($lastError === 'missing_required_fields') {
            echo "<script> alert('Please fill in all required fields') </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Create account</title>
<link rel="stylesheet" href="createaccount.css">
</head>
<body>
<div class="container">
    <h2>Create a new account</h2>
    <p>It's quick and easy.</p>
    <form action="createaccount.php" method="POST">
        <div class="name-group">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
        </div>
        <input type="email" name="email" placeholder="Email address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="tel" name="mobile_num" placeholder="Mobile number" pattern="[0-9]{11}" required>
        <label for="birthday">Birthday:</label>
        <input type="date" name="birthday" id="birthday" required>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option>Female</option>
            <option>Male</option>
            <option>Other</option>
        </select>
        <input type="submit" class="btn" value="Sign Up">
    </form>
    <div class="login-link">
        <a href="Facebook.php">Already have an account?</a>
    </div>
</div>
</body>
</html>