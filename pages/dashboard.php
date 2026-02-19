
<?php
if (isset($_GET['name'])){
$name = $_GET['name'];
}else{
$name = "No name";
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

    <h1>welcome to the page  <?= $name ?> Paka ka dol </h1>
</body>
</html>