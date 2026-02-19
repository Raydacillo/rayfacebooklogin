<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>

    <h1> create user </h1>
    <form action="functions/createUser.php" method="POST">
        <label for="">name</name>
            <input type="text" name="user_name">
            <label for="">age</label>
            <input type="number" name="user_age">
            <label for="">address</label>
            <input type="text" name="user_address">
            <Button>submit</Button>
    </form>

    <h1> create Products </h1>
    <form action="functions/createProducts.php" method="POST">
        <label for="">prod name</name>
            <input type="text" name="prod_name">
            <label for="">prod quantity</label>
            <input type="number" name="prod_quantity">
            <label for="">prod type</label>
            <input type="text" name="prod_type">
            <label for="">prod price</label>
            <input type="number" name="prod_price">
            <label for="">prod date added</label>
            <input type="date" name="prod_date_added">
            <Button>submit</Button>
    </form>
</body>

</html>