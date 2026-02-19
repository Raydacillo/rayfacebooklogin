<?php
include "../config/includes.php";
$list = retrieveAllUsers();
$lest = retrieveAllproducts();
// echo json_encode($list);

if (isset($_GET['status'])) {
if ($_GET['status'] == 'ok') 
  echo "<script> alert('Value Deleted Successfully') </script>";
}else if ($_GET['status'] == 'no') {
 echo "<script> alert('Value Deleted Successfully') </script>";
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

    <!-- contents -->

    <h1> This is the retrieve page</h1>


    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Username</th>
            <th>Action</th>
        </tr>


        <?php
        foreach ($list as $item) {
        ?>

            <tr>
                <td><?= $item["names"] ?> </td>
                <td><?= $item["age"] ?> </td>
                <td><?= $item["address"] ?> </td>
                <td><?= $item["username"] ?> </td>
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">view</a>
                 <a href="functions/deletefunction.php?deleteFrom=user&id=<?= $item['user_id'] ?>">Delete</a>
            </td>
            </tr>
             <?php
        }
    ?>
    </table>
    <table>
        <tr>
            <th>Prod_name</th>
            <th>prod_quantity</th>
            <th>prod_type</th>
            <th>prod_price</th>
            <th>prod_date_added</th>

        </tr>
    
    <?php
    foreach ($lest as $item) {
    ?>
        <tr>
            <td><?= $item["prod_name"] ?> </td>
            <td><?= $item["prod_quantity"] ?> </td>
            <td><?= $item["prod_type"] ?> </td>
            <td><?= $item["prod_price"] ?> </td>
            <td><?= $item["prod_date_added"] ?> </td>
            <td><a href="viewPageProd.php?prod_id=<?= $item['prod_id'] ?>">view</a>
         <a href="functions/deletefunction.php?deleteFrom=product&id=<?= $item['prod_id'] ?>">delete</a>
        </td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>

</html>