<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  Title etiketleri arasına yazdığınızda sekme adını belirlemiş olursunuz. -->
    <title>HIRE | Sign up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/register.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
        }

        .form-select {
            display: block;
            width: 100%;
            min-height: 50px;
            padding: .375rem 2.25rem .375rem .75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: .375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>

<body>
    <div class="wrapper" style="margin: 25px;">
        <div class="title-text">
            <div class="title login">Çalışan Formu</div>
            <div class="title signup">İş Veren Formu</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Çalışan</label>
                <label for="signup" class="slide signup">İş Veren</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="" method="POST" class="login">
                    <div class="field">
                        <input type="text" placeholder="Ad" name="name" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Soyad" name="surname" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email" name="emailAddress" required>
                    </div>
                    <div class="field">
                        <input type="tel" placeholder="Telefon" name="phone" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Şifre" name="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Şifreyi Doğrula" name="confirmPassword" required>
                    </div>
                    <div class="field">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Alanınızı seçiniz...</option>
                            <option value="1">Android Developer</option>
                            <option value="2">IOS Developer</option>
                            <option value="3">Project Management</option>
                        </select>
                    </div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Kendiden  Bahset" name="tellYourself" rows="3"></textarea>
                    </div>
                    <div class="field">

                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                        <input type="submit" name="submitEmployee" value="Kayıt Ol">
                    </div>
                </form>
                <form action="" method="POST" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Şirket İsmi" name="companyName" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email" name="emailAddress" required>
                    </div>
                    <div class="field">
                        <input type="tel" placeholder="Telefon" name="phone" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Şifre" name="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Şifreyi doğrula" name="confirmPassword" required>
                    </div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Vizyon" name="vision" rows="3"></textarea>
                    </div>
                    <div style="margin-top: 10%;"></div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Misyon" name="mission" rows="3"></textarea>
                    </div>
                    <div class="field">

                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submitEmployer" value="Kayıt Ol">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>

</body>

</html>
<?php
include('db/conDB.php');
if ($con) {
    if (isset($_POST["submitEmployee"])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $company = $_POST["company"];
        $emailAddress = $_POST["emailAddress"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $tellYourself = $_POST["tellYourself"];
        $offersOpen = $_POST["offersOpen"];

        if ($password == $confirmPassword) {
            $sql = "insert into kullanicilar (kullanici_ad, kullanici_soyad, kullanici_email, kullanici_sifre, kullanici_tanitim, kullanici_teklif_acik) values ('$name', '$surname','$emailAddress','$password','$tellYourself', '$offersOpen')";
            $result = mysqli_query($con, $sql);
            if (mysqli_query($con, $sql)) {
                echo "basarili";

                $sql = "insert into iletisim ()";
            } else {
                echo "kayıt olurken hata oldu";
            }
        } else {
            echo "Parolalar eşleşmiyor.";
        }
    }
    if (isset($_POST["submitEmployer"])) {
        $companyName = $_POST["companyName"];
        $emailAddress = $_POST["emailAddress"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $vision = $_POST["vision"];
        $mission = $_POST["mission"];

        if ($password == $confirmPassword) {
            $sql = "insert into kullanicilar (kullanici_ad, kullanici_soyad, kullanici_email, kullanici_sifre, kullanici_tanitim, kullanici_teklif_acik) values ('$companyName', '$surname','$emailAddress','$password','$tellYourself', '$offersOpen')";
            $result = mysqli_query($con, $sql);
            if (mysqli_query($con, $sql)) {
                echo "basarili";
                $sql = "select kullanici_id from kullanicilar where kullanici_email = '$emailAddress";
                if (mysqli_query($con, $sql)) {
                    $result = mysqli_query($con, $sql);
                    $row = $result->fetch_assoc();
                    $userID = $row["kullanici_id"];
                    $sql = "insert into iletisim (kullanicilar_kullanici_id, iletisim_tel_no, iletisim_mail) values ('$userID', '$phone', '$emailAddress')";
                    if (mysqli_query($con, $sql)) {
                        echo "islem basarili";
                    }else{
                        echo "iletisim veri tabanında hata var";
                    }
                }
            } else {
                echo "kayıt olurken hata oldu";
            }
        } else {
            echo "Parolalar eşleşmiyor.";
        }
    }
} else {
    echo "Veri tabani baglanti hatasi";
}
?>