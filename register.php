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
    </style>
</head>

<body>
    <div class="wrapper" style="margin: 25px;">
        <div class="title-text">
            <div class="title login">Employee Form</div>
            <div class="title signup">Employer Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Employee</label>
                <label for="signup" class="slide signup">Employer</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="#" class="login">
                    <div class="field">
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Surname" name="surname" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Company" name="company" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email Address" name="emailAddress" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" name="confirmPassword" required>
                    </div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tell me about yourself" name="tellYourself" rows="3"></textarea>
                    </div>
                    <div class="field">

                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
                <form action="#" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Company Name" name="companyName" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email Address" name="emailAddress" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" name="confirmPassword" required>
                    </div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Vision" name="vision" rows="3"></textarea>
                    </div>
                    <div style="margin-top: 10%;"></div>
                    <div class="field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mission" name="mission" rows="3"></textarea>
                    </div>
                    <div class="field">

                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submitEmployer" value="Signup">
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
//include('db/conDB.php');
if ($con) {
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $company = $_POST["company"];
        $emailAddress = $_POST["emailAddress"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $tellYourself = $_POST["tellYourself"];
        echo "basarili";

    }
    if (isset($_POST["submitEmployer"])) {
        $companyName = $_POST["companyName"];
        $emailAddress = $_POST["emailAddress"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $vision = $_POST["vision"];
        $mission = $_POST["mission"];
        echo "basarili";
    }
} else {
    echo "Veri tabani baglanti hatasi";
}
?>