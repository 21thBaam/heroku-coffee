<?php
    $servername = "qf5dic2wzyjf1x5x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "kw1fn8ikyc3t8a02";
    $password = "fbc7ihss5i02y7oo";
    $dbname = "ypg9uq715ye7be79";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>
