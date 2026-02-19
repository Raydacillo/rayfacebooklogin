<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
} else {
    echo "<script> window.location.href='retrievePage.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>

    <form action="functions/updateuser.php" method="POST">
        <label for="names">Name</label>
        <input name="names" type="text" value="<?= $getUser[0]['names'] ?>">
        <label for="age">Age</label>
        <input name="age" type="number" value="<?= $getUser[0]['age'] ?>">
        <label for="address">Address</label>
        <input name="address" type="text" value="<?= $getUser[0]['address'] ?>">
        <label for="username">Username</label>
        <input name="username" type="text" value="<?= $getUser[0]['username'] ?>">
        <label for="password">Password</label>
        <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">
        
        <input type="text" name="user_id" value="<?= $getUser[0]['user_id'] ?>"hidden>
        <button>EDIT</button>
    </form>
</body>
