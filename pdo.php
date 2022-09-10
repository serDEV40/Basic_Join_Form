<?php
    try {
        $db = new PDO("mysql:host=localhost; dbname=personel_bilgi; charset=utf8","root","Ailem1234.");
        
    } catch (PDOExpception $error) {

        echo $error->getMessage();
    
    }

?>