<?php
header("Content-Type: text/html;charset=utf-8");
try {
    $pdo = new PDO('mysql:host=localhost;dbname=pro_inmuebles', 'root', '');
    //echo 'conectado';
   
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>