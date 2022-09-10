<?php require_once('pdo.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container card-body my-5 container-sm container-md container-lg container-xl">
        <table class="table" style="border:solid 2px #fff">
            <thead class="bg-dark" style="border-radius:1rem 1rem 0rem 0rem; color:white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">E-posta Adresi</th>
                    <th scope="col">Şifresi</th>
                    <th scope="col">Yaşı</th>
                    <th scope="col">Adı & Soyadı</th>
                    <th scope="col">Kayıt Olduğu Tarih</th>
                    <th scope="col">Veriyi Güncelle</th>
                    <th scope="col">Veriyi Sil</th>
                </tr>        
            </thead>
            <?php 
                $askInfo = $db->prepare("SELECT * FROM personel_info");
                $askInfo->execute();
                $num = 0
            ?>

            <?php while($getData = $askInfo->fetch(PDO::FETCH_ASSOC)){ $num++ ?>
                <tr style="color:white" class="bg-dark">
                    <td >
                        <?php echo $getData['personel_id']; ?>
                    </td>
                    <td>
                        <?php echo $getData['personel_email']; ?>
                    </td>
                    <td>
                        <?php echo $getData['personel_password']; ?>
                    </td>
                    <td>
                        <?php echo $getData['personel_age']; ?>
                    </td>
                    <td>
                        <?php echo $getData['personel_name']; ?>
                    </td>
                    <td>
                        <?php echo $getData['save_time']; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="update.php?personel_id=<?php echo $getData['personel_id'] ?>">
                            Güncelle
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="prepare.php?personel_id=<?php echo $getData['personel_id'] ?>&bilgiyisil=ok">Sil</a>
                    </td>
                </tr>
            <?php }?>
        </table>
    </div>
    <script>
        const atag = document.querySelector('.btn-danger');
        atag.addEventListener((e)=>{
            e.preventDefault();
        });
    </script>
</body>
</html>