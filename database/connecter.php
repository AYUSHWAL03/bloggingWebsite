<?php
    $host = "localhost";
    $user_name = "root";
    $pass_word = "";
    $conn = mysqli_connect($host,$user_name,$pass_word);
    if(!$conn){
        die("Could not connect".mysqli_connect_error());
    }
    echo "Connection established"
?>