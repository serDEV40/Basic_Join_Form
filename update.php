<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php   
        require_once('pdo.php'); 
        $mBord = $_GET['personel_id'];

        $getIO = $db->prepare("SELECT * FROM personel_info WHERE personel_id = $mBord");
        $getIO->execute([
            "personel_id" => $_GET['personel_id']
        ]);

        $bilgi = $getIO->fetch(PDO::FETCH_ASSOC);
?>
<div style="width:33.3333%">
        <div>
            <header style="text-align:center;">
                <h3>Formu Düzenle</h3>
            </header>
        </div>
        <div>
            <form action="prepare.php" method="GET">
                <div style="padding:0.5rem 1rem; background-color:white; color:black ; border-radius:0rem">
                    <div class="status_form">
                        <label class="hm1" for="a_mail">Lütfen Yeni Bir E-posta Giriniz.</label>
                        <input value="<?php echo $bilgi["personel_email"];?>" class="form-control" type="email" name="personel_email" id="a_mail">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="passkey">Lütfen Yeni Bir Şifre Giriniz.</label>
                        <input value="<?php echo $bilgi['personel_password'];?>" class="form-control" type="password" name="personel_password" id="passkey">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="age">Lütfen Yeni Yaşınızı Giriniz.</label>
                        <input value="<?php echo $bilgi['personel_age']; ?>" class="form-control" type="number" name="personel_age" id="age">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="name">Lütfen Yeni Bir İsim Giriniz.</label>
                        <input value="<?php echo $bilgi['personel_name'];?>" class="form-control" type="text" id="name" name="personel_name">
                    </div>
                </div>
                <div class="btn-pro">
                    <button type="submit" class="btn-success m-3 fw-lighter btn" name="insert_bttn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>