<?php
session_start();
include 'connection.php';

$checkbox1 = $_POST['chk1'];
if($_POST["Submit"] == "Submit"){

    for ($i = 0; $i <count($checkbox1);$i++){
        if(!empty($checkbox1)){


        $query = "INSERT INTO contestant(pc1) VALUES ('".$checkbox1[$i]."')";
        mysqli_query($query) or die (mysqli_error());
        }
    }
    echo "NAMES are inserted";
}

?>