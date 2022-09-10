<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
    require_once('pdo.php');

    if(isset($_POST['insert_bttn'])){
        $kaydet = $db->prepare("INSERT INTO personel_info SET
        personel_email=:personel_email,
        personel_password=:personel_password,
        personel_age=:personel_age,
        personel_name=:personel_name
        ");
        
        $insert = $kaydet->execute(array(
            'personel_email'=>$_POST['personel_email'],
            'personel_password'=>$_POST['personel_password'],
            'personel_age'=>$_POST['personel_age'],
            'personel_name'=>$_POST['personel_name']
        ));
        

        if ($insert) {
            header('Location:index.php?status=basarili');
            exit;
        } else {
            header('Location:index.php?status=fail');
            exit;
        }
        
    }

    if($_GET['bilgiyisil']="ok"){
        $getID = $_GET['personel_id'];

        $delIO = $db->prepare("DELETE FROM personel_info WHERE personel_id = $getID");
        $delIO->execute([
            'personel_id' => $_GET['personel_id']
        ]);

        if($delIO){
            header('Location:users.php?durum=sildi');
            exit;
        }else{
            header('Location:users.php?durum=failed');
            exit;
        }
    }

?>