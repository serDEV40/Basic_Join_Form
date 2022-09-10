<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
            font-family:system-ui;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:rgba(0,0,0,0.75);
        }
        .status_form{
            display:flex;
            color:black;
            flex-direction: column;
        }
        .home{
            padding: 0.5rem 0rem;
            margin: 0rem 0.5rem;
            width:33.333%;
        }
        .title_one{
            padding: 0.5rem 1rem;
            background-color: lightslategray;
            border-radius: 1rem 1rem 0rem 0rem;
        }
        .btn-pro{
            padding: 0.5rem 1rem;
            background-color: lightslategray;
            border-radius: 0rem 0rem 1rem 1rem;
            display: flex;
            justify-content: center;
        }
        #get_btn{
            width:100%;
            height:1.75rem;
            border-radius: 0.25rem 0.25rem;
            outline:none;
            border:none;
            background-color:green;
            font-weight:400;
            font-size:0.75rem;
            color:white;
        }

        .hm1{
            margin-bottom:0.25rem;
            font-size:16px;
            color:black;
            font-weight:600;
        }
        input{
            outline:none;
            border:solid 2px black;
            /* border-radius:1rem 1rem 0rem 0rem */
            padding:3px 5px;
        }
    </style>
</head>
<body>
    <div class="home">
        <div class="title_one">
            <header> JOIN US FORM</header>
        </div>
        <div>
            <form action="prepare.php" method="POST">
                <div style="padding:0.5rem 1rem; background-color:white; color:black ; border-radius:0rem">
                    <div class="status_form">
                        <label class="hm1" for="a_mail">Lütfen Bir E-posta Giriniz.</label>
                        <input placeholder="Please Add E-mail Adress." class="form-control" type="email" name="personel_email" id="a_mail">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="passkey">Lütfen Bir Şifre Giriniz.</label>
                        <input placeholder="Please Enter A Password." class="form-control" type="password" name="personel_password" id="passkey">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="age">Lütfen Yaşınızı Giriniz.</label>
                        <input placeholder="Please Enter A Age." class="form-control" type="number" name="personel_age" id="age">
                    </div>

                    <div class="status_form">
                        <label class="hm1" for="name">Lütfen Bir İsim Giriniz.</label>
                        <input placeholder="Please Enter A Name." class="form-control" type="text" id="name" name="personel_name">
                    </div>
                </div>
                <div class="btn-pro">
                    <button type="submit" class="btn-success fw-lighter btn w-100" name="insert_bttn">SUBMIT</button>
                </div>
            </form>
        </div>
        <?php
            if($_GET['status'] == "basarili"){
                echo "
                <div class='card-body bg-success' style='margin:1rem auto; width:80%; border-radius:0.75rem; padding:0.25rem 0.5rem ; color:white;font-size:1rem;font-weight:300'>
                    <h5 class='card-title'>Üyelik Başarılı</h5>
                    <p class='card-text'>Yapmış Olduğunuz Üyelik Başvurusu Başarılıdır.</p>
                </div>
                ";
            }elseif($_GET['status'] == "fail"){
                echo "
                <div class='card-body bg-danger' style='margin:1rem 0rem; width:80%; padding:0.25rem 0.5rem ; color:white;font-size:1rem;font-weight:300'>
                    <h5 class='card-title'>Üyelik Başarılı</h5>
                    <p class='card-text'>Yapmış Olduğunuz Üyelik Başvurusu Başarılıdır.</p>
                </div>
                ";
            }
            
            

        ?>
    </div>

</body>
</html>
