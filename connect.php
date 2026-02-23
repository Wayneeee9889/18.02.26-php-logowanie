<?php
//Połączenie z serwerzem
$con = mysqli_connect("localhost", "root", "", "blogg");
if ($con->errno){
    echo "nie udało się połączyć z bazą dannych";
    exit;
}else{
    echo "połąnczono";
}

?>
