<?php include('db/conDB.php'); ?>
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
                        <input type="email" placeholder="Email" name="emailAddress" required>
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
                        <?php
                        $sql = "select alan_id, alan_adi from meslek_alanlar";
                        $result = mysqli_query($con, $sql);
                        ?>
                        <select class="form-select" aria-label="Default select example" name="section">
                            <option selected>Alanınızı seçiniz...</option>
                            <?php
                            foreach ($result as $i) {
                            ?> <option value=<?php echo $i["alan_id"]; ?>><?php echo $i["alan_adi"]; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Kendiden  Bahset" name="tellYourself" rows="3"></textarea>
                    </div>
                    <div class="field">
                        <div class="field" style="margin-top: 38px; display: flex; align-items: center;">
                            <input class="form-check-input" style="height: 20px !important; width: 20px !important;" type="checkbox" name="offersOpen" value="1" id="flexCheckDefault">
                            <label class="form-check-label" style="margin-top: 12px; margin-left: 10px;" for="flexCheckDefault">
                                İş tekliflerine açığım
                            </label>
                        </div>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submitEmployee" value="Kayıt Ol">
                    </div>
                </form>
                <form action="" method="POST" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Şirket sahibinin adı" name="ownerName" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Şirket sahibinin soyadı" name="ownerSurname" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Şirket adı" name="companyName" required>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email" name="emailAddress" required>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Şirket sahibi tanıtım" name="ownerIntroduction" rows="3"></textarea>
                    </div>
                    <div class="field" style="margin-top: 10%;">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Vizyon" name="vision" rows="3"></textarea>
                    </div>
                    <div class="field" style="margin-top: 10%;">
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
if ($con) {
    if (isset($_POST["submitEmployee"])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $emailAddress = $_POST["emailAddress"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $section = $_POST["section"];
        $tellYourself = $_POST["tellYourself"];
        $offersOpen = $_POST["offersOpen"];

        if ($password == $confirmPassword) {
            $sql = "insert into kullanicilar (kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_teklif_acik, kullanici_email, kullanici_sifre) values ('$name', '$surname','$tellYourself', '$offersOpen','$emailAddress','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $sql = "select kullanici_id from kullanicilar where kullanici_email = '$emailAddress'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = $result->fetch_assoc();
                    $userID = $row["kullanici_id"];
                    $sql = "insert into iletisim (kullanicilar_kullanici_id, iletisim_tel_no, iletisim_mail) values ('$userID', '$phone', '$emailAddress')";
                    if (mysqli_query($con, $sql)) {
                        $sql = "insert into kullanici_meslek_detay (kullanicilar_kullanici_id, alanlar_alan_id) values ('$userID', '$section')";
                        if (mysqli_query($con, $sql)) {
?>
                            <script type="text/javascript">
                                location.href = 'http://localhost/Hire/login.php';
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                window.alert("meslek detay hata");
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            window.alert("İletisim db hatasi");
                        </script>
                <?php
                    }
                }
            } else {
                ?>
                <script>
                    window.alert("Kayıt olurken hata");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                window.alert("Parolalar eşleşmedi");
            </script>
            <?php
        }
    }
    if (isset($_POST["submitEmployer"])) {
        $ownerName = $_POST["ownerName"];
        $ownerSurname = $_POST["ownerSurname"];
        $companyName = $_POST["companyName"];
        $emailAddress = $_POST["emailAddress"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $ownerIntroduction = $_POST["ownerIntroduction"];
        $vision = $_POST["vision"];
        $mission = $_POST["mission"];

        if ($password == $confirmPassword) {
            $sql = "insert into kullanicilar (kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email, kullanici_sifre) values ('$ownerName', '$ownerSurname','$ownerIntroduction','$emailAddress','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $sql = "select kullanici_id from kullanicilar where kullanici_email = '$emailAddress'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $row = $result->fetch_assoc();
                    $userID = $row["kullanici_id"];
                    $sql = "insert into iletisim (kullanicilar_kullanici_id, iletisim_tel_no, iletisim_mail) values ('$userID', '$phone', '$emailAddress')";
                    if (mysqli_query($con, $sql)) {

                        $sql = "insert into sirketler (kullanicilar_kullanici_id, sirket_adi, sirket_vizyon, sirket_misyon) values ('$userID', '$companyName', '$vision', '$mission')";
                        $sqlFoto = "insert into fotograflar (kullanicilar_kullanici_id, fotograf_adresi) value ('$userID', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4g-Qf3MOCxDiyXBYM_qK8UVg0zN5-7r_Fvw&usqp=CAU')";
                        if (mysqli_query($con, $sql)) {
                            $sqlSirketKullaniciID = "SELECT sirket_id FROM sirketler WHERE kullanicilar_kullanici_id = '$userID' ";
                            $resultSirketKullaniciID = mysqli_query($con, $sqlSirketKullaniciID);
                            $rowSirketID = $resultSirketKullaniciID->fetch_assoc();
                            $sirketId = $rowSirketID["sirket_id"];
                            $sqlInsanKaynagi = "insert into insan_kaynagi (sirketler_sirket_id, insan_kaynagi_id) values ('$sirketId' ,'$userID')";
                            if (mysqli_query($con, $sqlInsanKaynagi)) {
            ?>
                                <script type="text/javascript">
                                    location.href = 'http://localhost/Hire/login.php';
                                </script>
                            <?php
                            }
                        } else {
                            ?>
                            <script>
                                window.alert("sirketler db");
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            window.alert("iletisim db");
                        </script>
                <?php
                    }
                }
            } else {
                ?>
                <script>
                    window.alert("kayıt hatası");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                window.alert("parola eslesmedi");
            </script>
    <?php
        }
    }
} else {
    ?>
    <script>
        window.alert("Db hatasi");
    </script>
<?php
}
?>