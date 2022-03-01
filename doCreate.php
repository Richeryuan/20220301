<?php 
require_once("dbconnect.php");
// if(iseet($_GET["account"])){
//     echo "have account!!";
//     exit;
// }
// if(iseet($_GET["password"])){
//     echo "have password!!";
//     exit;
// }
//  if(!iseet($_POST["account"]) || !iseet($_POST["password"])){
//      echo "帳號或密碼有誤!!";
//      exit;
//      }

$account=$_POST["account"];
$password=$_POSTmb5["password"];
$gender=$_POST["gender"];
// echo $gender;
$phones=$_POST["phones"];


$phones=array_filter($phones); //把陣列空的資料移出。
$phones_string=implode(', ', $phones); //implode=js的join
// var_dump($phones);

// if(empty($account)){
//     echo"請輸入帳號";
//     exit;
// }
// if(empty($password)){
//     echo"請輸入密碼";
//     exit;
// }
// echo "account is $account, password is $password.";
// date_default_timezone_set("Asia/Taipei");
$now=date('Y-m-d H:i:s');


$sql="INSERT INTO users (account, password, gender, phones, create_time)
	VALUES ('$account',  '$password', '$gender', '$phones_string', '$now')";

// echo $sql

if ($conn->query($sql) === TRUE) {
    echo "新資料輸入成功<br>";
    $last_id = $conn->Insert_id;
    echo "id 為 $last_id ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  //關閉資料庫連結
header("location: create-user.php");



 ?>