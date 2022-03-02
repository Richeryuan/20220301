<?php
$name=$_GET["name"];
$email=$_GET["email"];
$data=[
    "name"=>$name,
    "email"=>$email,
];

// var_dump($data);
echo json_encode($data);

?>