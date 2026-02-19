<?php 
function retrieveAllUsers(){
include "connection.php";


$sql = "SELECT * FROM user";
$stmnt = $conn -> prepare($sql);
$stmnt->execute();
return $stmnt;

return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllproducts(){
include "connection.php";


$sql = "SELECT * FROM products";
$stmnt = $conn -> prepare($sql);
$stmnt->execute();
return $stmnt;

return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}
function loginAuth($usernames, $passwords){
    include "connection.php";
 
$sql = "SELECT *  FROM user WHERE username = :username AND password = :password";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "username" => $usernames,
  "password" => $passwords


]);
$count = $stmnt -> rowCount();

return $count;
}
function getUser($user_id){
include "connection.php";

$sql = "SELECT *  FROM user WHERE user_id = :id";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "id" =>  $user_id
]);

 return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function getproducts($prod_id){
include "connection.php";

$sql = "SELECT *  FROM products WHERE prod_id = :id";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "id" =>  $prod_id
]);

 return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}


function updateUser($userid, $names, $age, $address, $usernames, $passwords){
include "connection.php";

$sql = "UPDATE user SET names= :names, age= :age, address= :address, username= :username, password= :password WHERE user_id =:userid";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
 "names" => $names,
    "age" => $age,
    "address" => $address,
    "username" => $usernames,
    "password" => $passwords,
    "userid" => $userid
]);

 return $stmnt;

}

function updateproducts($prodid, $prodname, $prodquan, $prodtype, $prodprice, $proddate){
include "connection.php";

$sql = "UPDATE user SET names= :names, age= :age, address= :address, username= :username, password= :password WHERE user_id =:userid";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
 "prodname" => $prodname,
    "age" => $age,
    "prodquantity" => $prodquan,
    "prodtype" => $prodtype,
    "password" => $passwords,
    "prodid" => $prodid
]);

 return $stmnt;

}


function deleteuser($id)
{
    include "connection.php";

    $sql = "DELETE FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
    "id" => $id

    ]);
    return $stmnt;
}

function deleteProduct($id)
{
    include "connection.php";

    $sql = "DELETE FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
    "id" => $id

    ]);
    return $stmnt;
}



?>