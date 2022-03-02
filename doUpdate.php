<?php

require_once("dbconnect.php");

$id=$_POST["id"];
$account=$_POST["account"];
$gender=$_POST["gender"];
$phones=$_POST["phones"];
$phones=array_filter($phones);
$phones_string=implode(',', $phones);
// echo $account;

$sql="UPDATE users SET account='$account', gender='$gender',phones='$phones_string' WHERE id=3";

// echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "更新成功";
} else {
    echo "更新資料錯誤: " . $conn->error;
}



header("location: user-edit.php?id=".$id);
?>