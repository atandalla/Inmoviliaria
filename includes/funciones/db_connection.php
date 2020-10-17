<?php
    $conn = new mysqli('localhost','root', '', 'pro_inmuebles'); //direccion ip, passw, bd
    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }


    
?>