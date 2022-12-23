<?php include('db/conDB.php'); 

$userID = $_GET["userID"];

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
            <img src="hirelogo.png" alt="no image">
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
                <div class="nav_text">Anasayfa</div>
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

            <!--
            <div class="nav_link jobs">
                <div class="nav_icon"><i class="bi bi-bag-fill" style="font-size: 1.3rem  !important;"></i></div>
                <div class="nav_text">Jobs</div>
            </div>

            <div class="nav_link">
                <div class="nav_icon">
                    <div class="info">3</div>
                    <i class="bi bi-chat-dots-fill" style="font-size: 1.3rem  !important;"></i>
                </div>
                <div class="nav_text">Messaging</div>
            </div>

            <div class="nav_link">
                <div class="nav_icon">
                    <div class="info">3</div>
                    <i class="bi bi-bell-fill" style="font-size: 1.3rem  !important;"></i>
                </div>
                <div class="nav_text">Bildirimler</div>
            </div>-->

            <div class="header_right_2">
                <div class="nav_link d-flex">
                    <div class="nav_icon">

                        <div class="nav_text dropdown drop">
                            <i class="fa-solid fa-bell" style="font-size: 1.4rem  !important; display: flex; justify-content: center;"></i>
                            <div class="nav_text">Bildirimler</div>

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

                                <div class="bdr_bottom"></div>
                                <div class="title" style="color:black;">Hesap</div>
                                <div class="list">Ayarlar</div>
                                <div class="list">Yardım</div>
                                <div class="list bdr_bottom">Dil</div>
                                <div class="list">Çıkış Yap</div>
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
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="noimage" style="height:100px;
                    width:100px;
                    border-radius: 50%;
                    border:4px solid white;
                    
                    margin:-35px auto 0 auto;">

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
            <div class="post_box">
                <div class="input">
                    <div class="input_blocks">
                        <form action="" method="POST" style="display: flex; justify-content: space-around; align-items:center; width: 100%;">
                            <div>
                                <?php
                                $sql = "SELECT meslek_id, alan_id, meslek_adi, alan_adi FROM meslek_alanlar JOIN meslekler ON meslek_alanlar.meslekler_meslek_id = meslekler.meslek_id;";
                                $result = mysqli_query($con, $sql);
                                ?>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Meslek</option>
                                    <?php
                                    foreach ($result as $i) {
                                    ?> <option value=<?php echo $i["meslek_id"]; ?>><?php echo $i["meslek_adi"]; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Alan</option>
                                    <?php
                                    foreach ($result as $i) {
                                    ?> <option value=<?php echo $i["alan_id"]; ?>><?php echo $i["alan_adi"]; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Filtreyi uygula</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="post_item">
                <div class="post_item_header">
                    <div class="post_item_info">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="no image" class="post_profile" style="height:60px">
                        <div class="post_item_owner" style="margin-left:8px;">
                            <a href="#" class="act_title">Ali Efe Bozdaş </a>
                        </div>
                    </div>
                    <i class="bi bi-three-dots" style="padding:5px;"></i>
                </div>

                <div class="post_item_body_info">
                    <p style="font-size: 0.95rem;">Published new video on CSS Property Box model. this video will run
                        through few more properties that make up the
                        box-model , Margin, Border, Padding, Content-Height & Width
                    </p>
                </div>

                <video width="100%" controls class="post_iten_body_video" style="outline:none;">
                    <source src="box_model.mp4" type="video/mp4">
                </video>

                <div class="post_item_comment_info">
                    <img src="1.svg" alt="">
                    <img src="2.svg" alt="">
                    <img src="3.svg" alt="">


                </div>

                <div class="post_item_footer">
                    <div class="footer_item">


                    </div>

                    <!--
                    <div class="footer_item">
                        <i class="bi bi-arrow-90deg-right"></i>
                        <div>Share</div>

                    </div>
                    <div class="footer_item">

                        <i class="bi bi-cursor-fill"></i>
                        <div>Send</div>

                    </div>
-->

                </div>
            </div>

        </div>
        <div class="activity">
            <!--
            <div class="news">

                <div class="news_head">
                    <div class="news_title">Linkedln News</div>
                    <i class="bi bi-info-square-fill" style="font-size:15px;"></i>
                </div>
                <br>

                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Indian crosses 3,58,974 daily cases
                    </div>
                    <div style="margin-left:25px;" class="account_name">10h ago - 5,043 readers</div>
                </div>


                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Zomato files for $1.18 IPO
                    </div>
                    <div style="margin-left:25px;" class="account_name">13h ago - 52,043 readers</div>
                </div>
                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Jobs pay ,in IT soar
                    </div>
                    <div style="margin-left:25px;" class="account_name">1d ago - 7865 readers</div>
                </div>

                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Google saving $1B a year from WFH
                    </div>
                    <div style="margin-left:25px;" class="account_name">2d ago - 7865 readers</div>
                </div>
            </div>

         
            <div class="news">

                <div class="news_head">
                    <div class="news_title">Today's most viewed courses</div>
                    <i class="bi bi-info-square-fill" style="font-size:15px;"></i>
                </div>
                <br>

                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Indian crosses 3,58,974 daily cases
                    </div>
                    <div style="margin-left:25px;" class="account_name">Top news 9874 - reviews</div>
                </div>

                <div class="new_list">
                    <div class="act_title" style="display: flex;flex-direction: row;align-items: flex-start;">
                        <i class="bi bi-record-fill"
                            style="font-size:14px;margin-right:10px;display:block;margin-top:5px;"></i>
                        Indian crosses 3,58,974 daily cases
                    </div>
                    <div style="margin-left:25px;" class="account_name">Top news 9874 - reviews</div>
                </div>
            </div>
            -->
            <div class="news">
                <div class="news_head">
                    <div class="news_title act_title">Potansiyel İş Arayanlar</div>
                    <i class="bi bi-info-square-fill" style="font-size:15px;"></i>
                </div>
                <br>
                <div class="account_feed">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="no image" class="account_picture">
                    <div class="account_info">
                        <p class="act_title">Ahmet Işık</p>
                        <p class="account_name">Android Developer</p>
                        <div class="follow">
                            + Mülakat Teklifi Et
                        </div>
                    </div>
                </div>
                <div class="account_feed">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="no image" class="account_picture">
                    <div class="account_info">
                        <h4 class="act_title">Esra Durmaz</h4>
                        <p class="account_name">Pentester</p>

                        <div class="follow">
                            + Mülakat Teklifi Et
                        </div>
                    </div>
                </div>

                <div class="account_feed">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="no image" class="account_picture">
                    <div class="account_info">
                        <h4 class="act_title">Zeynep Ergün</h4>
                        <p class="account_name">Front-End Dev.</p>

                        <div class="follow">
                            + Mülakat Teklifi Et
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="/__/firebase/8.4.3/firebase-app.js"></script>
    <script src="/__/firebase/init.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
if ($con) {
    if (isset($_POST["submit"])) {
        
    }
}else {
    ?> <h2> <?php  echo "bagalnti hatasi"; ?> </h2> <?php
}
?>