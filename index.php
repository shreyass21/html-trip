<?php

$server = "localhost:8111";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){

    die("connection to this database failed due to".mysqli_connect());

}
//echo "sucess connecting to the db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$desc = $_POST['desc'];


$sql ="INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone no`, `desc`, `dt`) VALUES ( `$name`, 
`$age`, `$gender`, `$email`, `$phoneno`, `$desc`, current_timestamp()); ";

echo $sql;



?>