<?php
    $conn = new mysqli('localhost', 'root', '', 'jardineria');
    if($conn->$connect_error){
        echo $error -> $conn->connect_error;
    }
?>