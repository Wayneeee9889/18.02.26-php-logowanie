<?php
//session odpowiada za połączenie między plikami php, można ją także zakończyć
session_start();

//pobieramy informację z connect.php tylko jeden raz
require_once("./connect.php");

//tworzymy zmienne i przypisujemy ich do inputów html zla pobierania dannych o rejestracji od użytkownika 
$username = $_POST["new-username"];
$pass = $_POST["new-password"];
$rePass = $_POST["new-re-password"];

//sprawdzamy czy hasło które wpisał użytkownik jest takie same jak i w polu "powtórz hasło jeszcze raz" dla uniknięcia literówek 
if($pass == $rePass){
    $_SESSION["msg"] = "Sukceees";
    $sql = "INSERT INTO `users` (`id`, `login`, `password`, `nickname`) VALUES (NULL, '$username', '$pass', 'user".time()."')";
    mysqli_query($con, $sql);
}else{
    $_SESSION["msg"] =  "Podano różne hasła";
}

//przekierowanie na druga stronę
header("Location: /bolgg-main/");

$con->close();
?>