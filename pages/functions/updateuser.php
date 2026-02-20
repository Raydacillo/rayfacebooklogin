<?php
include "../../config/includes.php";

if (isset($_POST['user_id'])) {

    $name = $_POST['names'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userid = $_POST['user_id'];


    $result = updateUSer($userid, $name, $age, $address, $username, $password);

    if($result){
        echo "<script> window.location.href='../retrievePage.php' </script>";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$userid." ' </script>";
    }
}else{
    echo "<script> window.location.href='../retrievePage.php' </scrip>";

}




?>
<?php
include "../../config/includes.php";

if (isset($_POST['prod_id'])) {

    $prodname = $_POST['prod_name'];
    $prodquan = $_POST['prod_quantity'];
    $prodtype = $_POST['prod_type'];
    $prodprice = $_POST['prod_price'];
    $proddate = $_POST['prod_date_added'];
    $prodid = $_POST['prod_id'];


    $result = updateproducts( $prodid, $prodname, $prodquan, $prodtype, $prodprice, $proddate);

    if($result){
        echo "<script> window.location.href='../retrievePage.php' </script>";
    }else{
        echo "<script> window.location.href='../viewPage.php?prod_id'".$prodid." ' </script>";
    }
}else{
    echo "<script> window.location.href='../retrievePage.php' </scrip>";

}




?>