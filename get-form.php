<?php 
// if(iseet($_GET["account"])){
//     echo "have account!!";
//     exit;
// }
// if(iseet($_GET["password"])){
//     echo "have password!!";
//     exit;
// }
 if(!iseet($_GET["account"]) || !iseet($_GET["password"])){
     echo "帳號或密碼有誤!!";
     exit;
     }
$account=$_GET["account"];
$password=$_GET["password"];
if(empty($account)){
    echo"請輸入帳號";
    header("location: for.php")
    exit;
}
if(empty($password)){
    echo"請輸入密碼";
    exit;
}
echo "account is $account, password is $password.";
?>