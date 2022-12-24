<?php include('db/conDB.php');
$userID = $_GET["userID"];
$sqlIsCompany = "Select * FROM sirketler WHERE kullanicilar_kullanici_id = '$userID'";
$resultIsCompany = mysqli_query($con, $sqlIsCompany);
$companyState = $resultIsCompany->fetch_assoc();
?>
<html lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mainbody.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/activities.css">
    <title>HIRE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="download.png" type="image/x-icon">
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont,
                'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            background-color: #69a6e2;
            background-image: linear-gradient(to bottom right, #A6A6A6, #D9D9D9, #FFFFFF);

        }

        .form-select {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
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

    <!-- Nav bar header -->
    <div class="header">
        <div class="header_left">
            <a href="http://localhost/Hire/index.php?userID=<?php echo $userID; ?>"><img src="hirelogo.png" alt="no image"></a>
            <div class="search_box">
                <i class="bi bi-search"></i>
                <input type="text" class="search_input" placeholder="Ara">
            </div>
        </div>
        <div class="header_right">
            <div class="nav_link ">
                <div class="nav_icon">
                    <i class="bi bi-house-door-fill" style="font-size: 1.3rem  !important;"></i>
                </div>
                <div class="nav_text"><a href="http://localhost/Hire/index.php?userID=<?php echo $userID; ?>">Anasayfa</a></div>
            </div>

            <div class="header_right_2">
                <div class="nav_link d-flex">
                    <div class="nav_icon">

                        <div class="nav_text dropdown drop">
                            <i class="fa-solid fa-comments" style="font-size: 1.4rem  !important; display: flex; justify-content: center;"></i>
                            <div class="nav_text">Mülakat Teklifleri</div>

                            <div class="dropdown-content" style="left: -90px !important;">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="height:50px;object-fit: contain;border-radius:50px;" alt="noimage">
                                        <div class="dropdown_profile_info" style="padding-left:10px;">
                                            <div class="act_title">
                                                Umut SAYDAM
                                            </div>
                                            <div class="acoount_name">
                                                Android Developer
                                            </div>
                                        </div>

                                        <div class="profile_view_button">
                                            Profili Görüntüle
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="height:50px;object-fit: contain;border-radius:50px;" alt="noimage">
                                        <div class="dropdown_profile_info" style="padding-left:10px;">
                                            <div class="act_title">
                                                Umut SAYDAM
                                            </div>
                                            <div class="acoount_name">
                                                Android Developer
                                            </div>
                                        </div>

                                        <div class="profile_view_button">
                                            Profili Görüntüle
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="height:50px;object-fit: contain;border-radius:50px;" alt="noimage">
                                        <div class="dropdown_profile_info" style="padding-left:10px;">
                                            <div class="act_title">
                                                Umut SAYDAM
                                            </div>
                                            <div class="acoount_name">
                                                Android Developer
                                            </div>
                                        </div>

                                        <div class="profile_view_button">
                                            Profili Görüntüle
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small_screen">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>
            <div class="header_right_2">
                <div class="nav_link d-flex">
                    <div class="nav_icon">
                    </div>
                </div>
                <div class="small_screen">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>




            <div class="header_right_2" style="border-left: 1px solid grey;">
                <div class="nav_link d-flex">
                    <div class="nav_icon">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="non" style="height:30px;object-fit: contain;border-radius:50px;">
                        <div class="nav_text dropdown drop">

                            <i class="bi bi-caret-down-fill dropdown" style="font-size: 20px  !important; float: center; margin-left: 4px;"></i>
                            <div class="dropdown-content">
                                <div class="dropdown_profile">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="height:50px;object-fit: contain;border-radius:50px;" alt="noimage">
                                    <div class="dropdown_profile_info" style="padding-left:10px;">
                                        <div class="act_title">
                                            Umut SAYDAM
                                        </div>
                                        <div class="acoount_name">
                                            Android Developer
                                        </div>
                                    </div>
                                </div>
                                <div class="profile_view_button">
                                    <a href="user-profile.php?userID=<?php echo $userID; ?>">Profili Görüntüle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small_screen">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainbody -->
    <div class="mainbody">
        <div class="sidebar" style="border:none;">

            <div class="sidebar_first_col">
                <div class="profile_header" style="border-top-left-radius: 10px;border-top-right-radius:10px;"></div>
                <?php
                $sqlUserProfile = "SELECT fotograf_adresi FROM fotograflar WHERE kullanicilar_kullanici_id = '$userID'";
                $resultSqlUserProfile = mysqli_query($con, $sqlUserProfile);
                $resultSqlUserProfile = $resultSqlUserProfile->fetch_assoc();
                ?>
                <img src="uploads/<?php echo $resultSqlUserProfile["fotograf_adresi"]; ?>" alt="noimage" style="height:100px; width:100px; border-radius: 50%; border:4px solid white; margin:-35px auto 0 auto;">

                <div class="profile_info">
                    <p style="text-align: center;" class="act_title">Umut SAYDAM</p>
                    <p class="account_name">Android Developer</p>
                </div>

                <div style="border:0.2px solid lightgrey"></div>
            </div>

            <div class="sidebar_second_col">

                <div class="sidebar_title">
                    <div class="sidebar_footer">
                        <i class="fa-regular fa-clock"></i>
                        <div>Mülakat Teklifi Geçmişi</div>
                    </div>
                </div>
                <div class="recent">
                    <div class="sidebar_second_text"><i class="fa-solid fa-circle-dot" style="margin-right:10px;font-size: 10px;"></i>Webtekno</div>
                    <div class="sidebar_second_text"><i class="fa-solid fa-circle-dot" style="margin-right:10px;font-size: 10px;"></i>Aselsan</div>
                    <div class="sidebar_second_text"><i class="fa-solid fa-circle-dot" style="margin-right:10px;font-size: 10px;"></i>Nasa</div>
                </div>


                <div class="recent">



                </div>
            </div>

        </div>
        <div class="posts">
            <?php

            if (!is_null($companyState)) { ?>
                <div class="post_box">
                    <div class="input">
                        <div class="input_blocks">
                            <form action="" method="GET" style="display: flex; justify-content: space-around; align-items:center; width: 100%;">
                                <input type="text" name="userID" hidden="true" value="<?php echo $userID; ?>" id="">
                                <div>
                                    <?php
                                    $sql = "SELECT meslek_id, alan_id, meslek_adi, alan_adi FROM meslek_alanlar JOIN meslekler ON meslek_alanlar.meslekler_meslek_id = meslekler.meslek_id;";
                                    $result = mysqli_query($con, $sql);
                                    ?>
                                    <select class="form-select" name="job" aria-label="Default select example">
                                        <option selected>Meslek</option>
                                        <?php
                                        foreach ($result as $i) {
                                        ?> <option value=<?php echo $i["meslek_id"]; ?>><?php echo $i["meslek_adi"]; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select" name="sector" aria-label="Default select example">
                                        <option selected>Alan</option>
                                        <?php
                                        foreach ($result as $i) {
                                        ?> <option value=<?php echo $i["alan_id"]; ?>><?php echo $i["alan_adi"]; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="">Filtreyi uygula</button>
                            </form>
                        </div>
                    </div>

                </div>
                <?php }


            $sqlUserList = "SELECT meslek_id, meslek_adi, alan_id, alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email, fotograf_id, fotograf_adresi, video_id, video_adresi, video_zamani FROM fotograflar INNER JOIN (SELECT * from videolar INNER JOIN (SELECT meslek_id, meslek_adi, alan_id, alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email FROM meslekler INNER JOIN (SELECT * FROM meslek_alanlar INNER JOIN (SELECT * FROM kullanicilar INNER JOIN kullanici_meslek_detay ON kullanicilar.kullanici_id = kullanici_meslek_detay.kullanicilar_kullanici_id) as a ON a.alanlar_alan_id = meslek_alanlar.alan_id) as b ON b.meslekler_meslek_id = meslekler.meslek_id) as v ON v.kullanici_id = videolar.kullanicilar_kullanici_id) as f ON f.kullanici_id = fotograflar.kullanicilar_kullanici_id;";
            $resultUserList = mysqli_query($con, $sqlUserList);
            if ($resultUserList) {
                $rowUserList = $resultUserList;
            }

            if (isset($_GET["job"]) && isset($_GET["sector"])) {
                $job = $_GET["job"];
                $sector = $_GET["sector"];
                $sqlFilterUser = "SELECT  meslek_id, meslek_adi, alan_id, alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email, fotograf_id, fotograf_adresi, video_id, video_adresi, video_zamani FROM fotograflar INNER JOIN (SELECT meslek_id, meslek_adi, alan_id, alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email,video_adresi, video_zamani, video_id FROM videolar INNER JOIN (SELECT * FROM kullanicilar INNER JOIN (SELECT * FROM kullanici_meslek_detay INNER JOIN (SELECT * FROM meslekler INNER JOIN meslek_alanlar ON meslekler.meslek_id = meslek_alanlar.meslekler_meslek_id HAVING meslek_id = '$job' AND alan_id = '$sector') as filterJob ON filterJob.alan_id = kullanici_meslek_detay.alanlar_alan_id) as user ON user.kullanicilar_kullanici_id = kullanici_id) as videoUser ON videoUser.kullanici_id = videolar.kullanicilar_kullanici_id) as fotograflarUser ON fotograflarUser.kullanici_id = fotograflar.kullanicilar_kullanici_id;";
                $resultFilterUser = mysqli_query($con, $sqlFilterUser);
                $rowFilterUser = $resultFilterUser;
                $test = $resultFilterUser->fetch_assoc();
                if (is_null($test)) {
                    echo "boyle kullanici yok";
                } else if (!is_null($rowFilterUser)) {
                    foreach ($rowFilterUser as $filterUser) { ?>
                        <div class="post_item">
                            <div class="post_item_header">
                                <div class="post_item_info">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="no image" class="post_profile" style="height:60px">
                                    <div class="post_item_owner" style="margin-left:8px;">
                                        <a href="#" class="act_title"><?php echo $filterUser["kullanici_ad"] . " " . $filterUser["kullanici_soyad"] . " "; ?></a>
                                    </div>
                                    <br>
                                    <div class="account_name" style="margin-left: 15px;">
                                        <?php echo $filterUser["meslek_adi"] . " | " . $filterUser["alan_adi"]; ?>
                                    </div>
                                </div>
                                <i class="bi bi-three-dots" style="padding:5px;"></i>
                            </div>

                            <div class="post_item_body_info">
                                <p style="font-size: 0.95rem;"><?php echo $filterUser["kullanici_tanitim"]; ?></p>
                            </div>
                            <video width="100%" controls class="post_iten_body_video" style="outline:none;">
                                <source src="uploadsVideo/<?php echo $filterUser["video_adresi"]; ?>" type="video/mp4">
                            </video>
                            <div class="post_item_footer">
                                <div class="footer_item"></div>
                            </div>
                        </div>
                    <?php }
                }
            } else {
                foreach ($rowUserList as $user) { ?>
                    <div class="post_item">
                        <div class="post_item_header">
                            <div class="post_item_info">
                                <img src="uploads/<?php echo $user["fotograf_adresi"]; ?>" alt="no image" class="account_picture">
                                <div class="post_item_owner" style="margin-left:8px;">
                                    <a href="http://localhost/Hire/user-profile.php?userID=<?php echo $user["kullanici_id"]; ?>" class="act_title"><?php echo $user["kullanici_ad"] . " " . $user["kullanici_soyad"] . " "; ?></a>
                                </div>
                                <br>
                                <div class="account_name" style="margin-left: 15px;">
                                    <?php echo $user["meslek_adi"] . " | " . $user["alan_adi"]; ?>
                                </div>
                            </div>
                            <i class="bi bi-three-dots" style="padding:5px;"></i>
                        </div>

                        <div class="post_item_body_info">
                            <p style="font-size: 0.95rem;"><?php echo $user["kullanici_tanitim"]; ?></p>
                        </div>
                        <video width="100%" controls class="post_iten_body_video" style="outline:none;">
                            <source src="uploadsVideo/<?php echo $user["video_adresi"]; ?>" type="video/mp4">
                        </video>
                        <div class="post_item_footer">
                            <div class="footer_item"></div>
                        </div>
                    </div>
            <?php }
            }

            ?>


        </div>

        <?php
        if (!is_null($companyState)) { ?>
            <div class="activity">
                <div class="news">
                    <div class="news_head">
                        <div class="news_title act_title">Potansiyel İş Arayanlar</div>
                        <i class="bi bi-info-square-fill" style="font-size:15px;"></i>
                    </div>
                    <br>
                    <?php
                    $sqlSomeEmployee = "SELECT   alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, fotograf_id, fotograf_adresi FROM fotograflar INNER JOIN (SELECT meslek_id, meslek_adi, alan_id, alan_adi, kullanici_id, kullanici_ad, kullanici_soyad, kullanici_tanitim, kullanici_email FROM videolar INNER JOIN (SELECT * FROM kullanicilar INNER JOIN (SELECT * FROM kullanici_meslek_detay INNER JOIN (SELECT * FROM meslekler INNER JOIN meslek_alanlar ON meslekler.meslek_id = meslek_alanlar.meslekler_meslek_id) as filterJob ON filterJob.alan_id = kullanici_meslek_detay.alanlar_alan_id) as user ON user.kullanicilar_kullanici_id = kullanici_id) as videoUser ON videoUser.kullanici_id = videolar.kullanicilar_kullanici_id) as fotograflarUser ON fotograflarUser.kullanici_id = fotograflar.kullanicilar_kullanici_id LIMIT 3;";
                    $resultSomeEmployee = mysqli_query($con, $sqlSomeEmployee);
                    $rowSomeEmployee = $resultSomeEmployee;

                    foreach ($rowSomeEmployee as $userSomeEmployee) {
                        if ($userSomeEmployee["kullanici_id"] != $userID) { ?>
                            <div class="account_feed">
                                <img src="uploads/<?php echo $userSomeEmployee["fotograf_adresi"]; ?>" alt="no image" class="account_picture">
                                <div class="account_info">
                                    <a href="http://localhost/Hire/user-profile.php?userID=<?php echo $userSomeEmployee["kullanici_id"] ?>"><?php echo $userSomeEmployee["kullanici_ad"] . " " . $userSomeEmployee["kullanici_soyad"]; ?></a>
                                    <p class="account_name"><?php echo $userSomeEmployee["alan_adi"]; ?></p>
                                    <div class="follow">
                                        + Mülakat Teklifi Et
                                    </div>
                                </div>
                            </div>
                        <?php  }
                        ?>
                    <?php }
                    ?>
                </div>
            </div>
        <?php } ?>

    </div>
    <script src="/__/firebase/8.4.3/firebase-app.js"></script>
    <script src="/__/firebase/init.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
if ($con) {
} else {
?> <h2> <?php echo "bagalnti hatasi"; ?> </h2> <?php } ?>