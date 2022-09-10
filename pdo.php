<?php
    try {
        $db = new PDO("mysql:host=localhost; dbname=personel_bilgi; charset=utf8","root","");
        
    } catch (PDOExpception $error) {

        echo $error->getMessage();
    
    }

?>
