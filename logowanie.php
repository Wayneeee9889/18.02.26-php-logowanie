<?php
session_start();

require_once("./connect.php");

$username = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM `users` WHERE login = '$username' AND password = '$pass'";

$result = mysqli_query($con, $sql);

if(!mysqli_num_rows($result)){
    $_SESSION["msg"] = "i nie projdiot wojsko tiomnoe!";
    header('Location: /bolgg-main/');
}else{
    header('Location: /bolgg-main/s_blog-article.html');
}

?>