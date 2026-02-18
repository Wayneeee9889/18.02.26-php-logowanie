<?php
session_start();

//połączenie z bazą danych
$con = mysqli_connect("localhost", "root", "", "blogg");
//sprawdzenie czy jest połączenie z bazą danych, jeżeli nie to wyswietli się nam "nie udało sie połaczyć z bazą danych"
if($con->errno){
    echo "nie udało sie połaczyć z bazą danych";
    exit;
}else{
    echo "Połączono";
}
