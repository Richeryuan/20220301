<?php
require_once("dbconnect.php");
$id=$_GET["id"];


//delete
// $sql="DELETE FROM users WHERE id=$id";

//update valid to 0

$sql="UPDATE users SET valid=0 WHERE id=$id";



// echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "更新資料錯誤: " . $conn->error;
}

header("location: user-list.php");
?>