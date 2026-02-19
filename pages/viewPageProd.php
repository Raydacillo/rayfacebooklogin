<?php
include "../config/includes.php";

if(isset($_GET['prod_id'])){
$prod_id = $_GET['prod_id'];

$getProd = getproducts($prod_id);
}else{
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
    <h1>prod_name: <?= $getProd[0]['prod_name'] ?> </h1>
    <h1>prod_quantity: <?= $getProd[0]['prod_quantity'] ?> </h1>
    <h1>prod_type: <?= $getProd[0]['prod_type'] ?> </h1>
    <h1>prod_price: <?= $getProd[0]['prod_price'] ?> </h1>
    <h1>prod_date_added: <?= $getProd[0]['prod_date_added'] ?> </h1>
    <a href="">Edit</a>
</body>