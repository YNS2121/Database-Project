<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  Title etiketleri arasına yazdığınızda sekme adını belirlemiş olursunuz. -->
    <title>HIRE | Log in</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <!-- Bootstrap kütüphanesini css klasöründen aldık -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">

    <div class=" container-sm col-3 bg-light p-md-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailAddress">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                <a href="register.php" class="btn btn-primary">Sign Up</a>
            </div>
        </form>
    </div>

    <!-- Javascript ekledik-->
    <script src=" js/bootstrap.min.js" async defer></script>
</body>

</html>
<?php
include('db/conDB.php');
if ($con) {
    if (isset($_POST["submit"])) {
        $emailAddress = $_POST["emailAddress"];
        $password = $_POST["password"];
        $sql = "select * from kullanicilar where kullanici_email = '$emailAddress' and kullanici_sifre = '$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: index.php");
            die();
        } else {
            echo "Boyle bir hesap yok";
        }
    }
} else {
    echo "Veri tabani baglanti hatasi";
}
?>