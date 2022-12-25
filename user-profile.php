<?php include('db/conDB.php');

$state = 1;
if (isset($_GET["userID"]) && isset($_GET["gusetID"])) {
  $userID = $_GET["gusetID"];
  $gusetID = $_GET["userID"];
  $state = 0;
} else if (isset($_GET["userID"])) {
  $userID = $_GET["userID"];
  $state = 1;
} else {
?>
  <script type="text/javascript">
    location.href = "http://localhost/Hire/login.php";
  </script>
<?php
}
$stateAlan = 0;
$sqlOwner = "Select * FROM sirketler WHERE kullanicilar_kullanici_id = '$userID'";
if (mysqli_num_rows(mysqli_query($con, $sqlOwner)) > 0) {
  $stateAlan = 1;
}
$sql = "Select * from kullanicilar where kullanici_id = '$userID'";
$meslekSQL = "SELECT kullanicilar_kullanici_id,meslekler_meslek_id, alan_id, alan_adi from kullanici_meslek_detay JOIN meslek_alanlar ON kullanici_meslek_detay.alanlar_alan_id = meslek_alanlar.alan_id HAVING kullanici_meslek_detay.kullanicilar_kullanici_id = '$userID'";
$sqlIletisim = "SELECT * FROM iletisim where kullanicilar_kullanici_id = '$userID'";
$sqlImg = "SELECT fotograf_adresi FROM fotograflar where kullanicilar_kullanici_id = '$userID'";
$result = mysqli_query($con, $sql);
$resultMeslekSQL = mysqli_query($con, $meslekSQL);
$resultIletisimSQL = mysqli_query($con, $sqlIletisim);
$resultImg = mysqli_query($con, $sqlImg);
$sqlCompany =  "SELECT * FROM kullanicilar INNER JOIN sirketler ON sirketler.kullanicilar_kullanici_id = kullanicilar.kullanici_id HAVING kullanici_id = '$userID';";
$resultCompany = mysqli_query($con, $sqlCompany);
$resultCompany = $resultCompany->fetch_assoc();
if ($result) {
  $row = $result->fetch_assoc();
  $rowMeslek = $resultMeslekSQL->fetch_assoc();
  $rowIletisim = $resultIletisimSQL->fetch_assoc();
  $rowImg = $resultImg->fetch_assoc();
} else {
?>
  <script>
    window.alert("Hata");
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>Kullanıcı Profili</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-white profile-widget">
          <div class="row">
            <div class="col-sm-12">
              <div class="image-container bg2">
                <?php
                if (is_null($rowImg)) { ?>
                  <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" class="avatar" alt="avatar" />
                <?php } else { ?>
                  <img src="uploads/<?php echo $rowImg["fotograf_adresi"]; ?>" class="avatar" alt="avatar" />
                <?php  }
                ?>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="details">
                <h4> <?php echo $row["kullanici_ad"] . " " . $row["kullanici_soyad"]; ?> <i class="fa fa-sheild"></i></h4>
                <?php
                if ($stateAlan == 1) { ?>
                  <div><?php echo  $resultCompany["sirket_adi"]; ?></div>
                <?php } else { ?>
                  <div><?php echo  $rowMeslek["alan_adi"]; ?></div>
                <?php }
                ?>
                <br>
                <div></div>
                <div class="mg-top-10" style="display: flex;align-items: center;justify-content: center;">
                  <?php
                  if ($state == 0) { ?>
                    <form action="" method="POST">
                      <button type="submit" class="btn btn-blue" style="margin-right:5px;" name="submitInterview">Mülakat teklifi et</button>
                    </form>
                  <?php }
                  if ($state == 1) { ?>
                    <a href="edit_profil.php?userID=<?php echo $userID; ?>" style="margin-left:5px;" class="btn btn-blue" onclick="goclicky(this); return false;" target="_blank">Profili Düzenle</a>
                  <?php }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-white border-top-purple">
              <div class="panel-heading">
                <h3 class="panel-title">Özgeçmiş</h3>
                <div class="controls pull-right">
                  <span class="pull-right clickable">
                    <i class="fa fa-chevron-up"></i>
                  </span>
                </div>
              </div>
              <div class="panel-body">
                <div class="body-section">
                  <h5 class="section-heading">Hakkında</h5>
                  <p class="section-content"><?php echo $row["kullanici_tanitim"]; ?></p>
                </div>
                <div class="body-section">
                  <h5 class="section-heading">İlgilendiği Alan</h5>
                  <?php
                  if ($stateAlan == 1) { ?>
                    <?php echo  $resultCompany["sirket_adi"]; ?>
                  <?php } else { ?>
                    <?php echo  $rowMeslek["alan_adi"]; ?>
                  <?php }
                  ?>
                </div>
                <?php
                if ($stateAlan == 1) { ?>
                  <div class="body-section">
                    <h5 class="section-heading">Şirket Vizyon</h5>
                    <?php
                    if ($stateAlan == 1) { ?>
                      <?php echo  $resultCompany["sirket_vizyon"]; ?>
                    <?php } ?>
                  </div>
                  <div class="body-section">
                    <h5 class="section-heading">Şirket Misyon</h5>
                    <?php
                    if ($stateAlan == 1) { ?>
                      <?php echo  $resultCompany["sirket_misyon"]; ?>
                    <?php } ?>
                  </div>
                <?php }
                ?>
              </div>
            </div>

            <?php
            if ($stateAlan == 0) { ?>
              <div class="panel panel-white border-top-light-blue">
                <div class="panel-heading">
                  <h3 class="panel-title">Mülakat Videoları ve CV</h3>
                  <div class="controls pull-right">
                    <span class="pull-right clickable">
                      <i class="fa fa-chevron-up"></i>
                    </span>
                  </div>
                </div>
                <div class="panel-body">
                  <?php
                  $sqlCvList =  "SELECT * from cv JOIN diller ON cv.diller_dil_id = diller.dil_id HAVING cv.kullanicilar_kullanici_id = '$userID';";
                  $resultCvList = mysqli_query($con,  $sqlCvList);
                  $sqlVideoList = "SELECT * from videolar where kullanicilar_kullanici_id = '$userID'";
                  $resultVideoList = mysqli_query($con,  $sqlVideoList);
                  ?>
                  <div class="body-section">
                    <p><b>Kullanici CV bilgileri.</b></p>
                    <ul>
                      <?php
                      foreach ($resultCvList as $item) { ?>
                        <li><a href="uploadsCv/<?php echo $item['cv_adresi']; ?>"><?php echo $item['cv_adresi'] . ' ' . '(' . $item['dil_adi'] . ')'; ?></a></li>
                      <?php }
                      ?>
                    </ul>
                    <p><b>Kullanici mülakat videoları.</b></p>
                    <ul>
                      <?php
                      foreach ($resultVideoList as $video) { ?>
                        <li><a href="uploadsVideo/<?php echo $video['video_adresi']; ?>"><?php echo $video['video_adresi']; ?></a></li>
                      <?php }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            <?php }
            ?>
          </div>

          <div class="col-sm-6">
            <div class="panel panel-white border-top-green">
              <div class="panel-heading">
                <h3 class="panel-title">Kullanıcı Bilgisi</h3>
                <div class="controls pull-right">
                  <span class="pull-right clickable">
                    <i class="fa fa-chevron-up"></i>
                  </span>
                </div>
              </div>
              <div class="panel-body">
                <div class="body-section">
                  <h5 class="section-heading">Ad</h5>
                  <p class="section-content"><?php echo $row["kullanici_ad"]; ?></p>
                </div>
                <div class="body-section">
                  <h5 class="section-heading">Soyad</h5>
                  <p class="section-content"><?php echo $row["kullanici_soyad"]; ?></p>
                </div>
                <div class="body-section">
                  <h5 class="section-heading">Telefon</h5>
                  <p class="section-content"><?php echo $rowIletisim["iletisim_tel_no"]; ?></p>
                </div>
                <div class="body-section">
                  <h5 class="section-heading">Email</h5>
                  <p class="section-content"><?php echo $rowIletisim["iletisim_mail"]; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php

  if ($con) {
    if (isset($_POST["submitInterview"])) {
      $userID = $_GET["gusetID"];
      $gusetID = $_GET["userID"];

      $sqlIsThere = "Select * FROM teklifler WHERE kullanicilar_kullanici_id = '$userID' AND insan_kaynagi_id = '$gusetID'";
      $resultIsThere = mysqli_query($con, $sqlIsThere);
      $resultIsThere = $resultIsThere->fetch_assoc();
      if (is_null($resultIsThere)) {
        $sqlTeklif = "insert into teklifler (insan_kaynagi_id, kullanicilar_kullanici_id) values ('$gusetID', '$userID')";
        if (mysqli_query($con, $sqlTeklif)) {
  ?>
          <script>
            window.alert("Teklif edildi");
          </script>
        <?php
        }
      } else {
        ?>
        <script>
          window.alert("Zaten teklif edildi");
        </script>
    <?php
      }
    }
  } else {
    ?>
    <script>
      window.alert("baglanti hatasi");
    </script>
  <?php
  }


  ?>
  <style type="text/css">
    body {
      margin-top: 20px;
      background: #eee;
    }

    .profile-widget {
      position: relative;
    }

    .profile-widget .image-container {
      background-size: cover;
      background-position: center;
      padding: 190px 0 10px;
    }

    .profile-widget .image-container .profile-background {
      width: 100%;
      height: auto;
    }

    .profile-widget .image-container .avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin: 0 auto -60px;
      display: block;
    }

    .profile-widget .details {
      padding: 50px 15px 15px;
      text-align: center;
    }

    /* Component: Mini Profile Widget */
    .mini-profile-widget .image-container .avatar {
      width: 180px;
      height: 180px;
      display: block;
      margin: 0 auto;
      border-radius: 50%;
      background: white;
      padding: 4px;
      border: 1px solid #dddddd;
    }

    .mini-profile-widget .details {
      text-align: center;
    }

    /* Component: Panel */
    .panel {
      border-radius: 0;
      margin-bottom: 30px;
    }

    .panel.solid-color {
      color: white;
    }

    .panel .panel-heading {
      border-radius: 0;
      position: relative;
    }

    .panel .panel-heading>.controls {
      position: absolute;
      right: 10px;
      top: 12px;
    }

    .panel .panel-heading>.controls .nav.nav-pills {
      margin: -8px 0 0 0;
    }

    .panel .panel-heading>.controls .nav.nav-pills li a {
      padding: 5px 8px;
    }

    .panel .panel-heading .clickable {
      margin-top: 0px;
      font-size: 12px;
      cursor: pointer;
    }

    .panel .panel-heading.no-heading-border {
      border-bottom-color: transparent;
    }

    .panel .panel-heading .left {
      float: left;
    }

    .panel .panel-heading .right {
      float: right;
    }

    .panel .panel-title {
      font-size: 16px;
      line-height: 20px;
    }

    .panel .panel-title.panel-title-sm {
      font-size: 18px;
      line-height: 28px;
    }

    .panel .panel-title.panel-title-lg {
      font-size: 24px;
      line-height: 34px;
    }

    .panel .panel-body {
      font-size: 13px;
    }

    .panel .panel-body>.body-section {
      margin: 0px 0px 20px;
    }

    .panel .panel-body>.body-section>.section-heading {
      margin: 0px 0px 5px;
      font-weight: bold;
    }

    .panel .panel-body>.body-section>.section-content {
      margin: 0px 0px 10px;
    }

    .panel-white {
      border: 1px solid #dddddd;
    }

    .panel-white>.panel-heading {
      color: #333;
      background-color: #fff;
      border-color: #ddd;
    }

    .panel-white>.panel-footer {
      background-color: #fff;
      border-color: #ddd;
    }

    .panel-primary {
      border: 1px solid #dddddd;
    }

    .panel-purple {
      border: 1px solid #dddddd;
    }

    .panel-purple>.panel-heading {
      color: #fff;
      background-color: #8e44ad;
      border: none;
    }

    .panel-purple>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-purple {
      border: 1px solid #dddddd;
    }

    .panel-light-purple>.panel-heading {
      color: #fff;
      background-color: #9b59b6;
      border: none;
    }

    .panel-light-purple>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-blue,
    .panel-info {
      border: 1px solid #dddddd;
    }

    .panel-blue>.panel-heading,
    .panel-info>.panel-heading {
      color: #fff;
      background-color: #2980b9;
      border: none;
    }

    .panel-blue>.panel-heading .panel-title a:hover,
    .panel-info>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-blue {
      border: 1px solid #dddddd;
    }

    .panel-light-blue>.panel-heading {
      color: #fff;
      background-color: #3498db;
      border: none;
    }

    .panel-light-blue>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-green,
    .panel-success {
      border: 1px solid #dddddd;
    }

    .panel-green>.panel-heading,
    .panel-success>.panel-heading {
      color: #fff;
      background-color: #27ae60;
      border: none;
    }

    .panel-green>.panel-heading .panel-title a:hover,
    .panel-success>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-green {
      border: 1px solid #dddddd;
    }

    .panel-light-green>.panel-heading {
      color: #fff;
      background-color: #2ecc71;
      border: none;
    }

    .panel-light-green>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-orange,
    .panel-warning {
      border: 1px solid #dddddd;
    }

    .panel-orange>.panel-heading,
    .panel-warning>.panel-heading {
      color: #fff;
      background-color: #e82c0c;
      border: none;
    }

    .panel-orange>.panel-heading .panel-title a:hover,
    .panel-warning>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-orange {
      border: 1px solid #dddddd;
    }

    .panel-light-orange>.panel-heading {
      color: #fff;
      background-color: #ff530d;
      border: none;
    }

    .panel-light-orange>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-red,
    .panel-danger {
      border: 1px solid #dddddd;
    }

    .panel-red>.panel-heading,
    .panel-danger>.panel-heading {
      color: #fff;
      background-color: #d40d12;
      border: none;
    }

    .panel-red>.panel-heading .panel-title a:hover,
    .panel-danger>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-red {
      border: 1px solid #dddddd;
    }

    .panel-light-red>.panel-heading {
      color: #fff;
      background-color: #ff1d23;
      border: none;
    }

    .panel-light-red>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-pink {
      border: 1px solid #dddddd;
    }

    .panel-pink>.panel-heading {
      color: #fff;
      background-color: #fe31ab;
      border: none;
    }

    .panel-pink>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-light-pink {
      border: 1px solid #dddddd;
    }

    .panel-light-pink>.panel-heading {
      color: #fff;
      background-color: #fd32c0;
      border: none;
    }

    .panel-light-pink>.panel-heading .panel-title a:hover {
      color: #f0f0f0;
    }

    .panel-group .panel {
      border-radius: 0;
    }

    .panel-group .panel+.panel {
      margin-top: 0;
      border-top: 0;
    }

    .bg-blue,
    .bg-info {
      background-color: #2980b9 !important;
    }

    .bg-light-blue {
      background-color: #3498db !important;
    }

    .bg-red,
    .bg-danger {
      background-color: #d40d12 !important;
    }

    .bg-light-red {
      background-color: #ff1d23 !important;
    }

    .bg-purple {
      background-color: #8e44ad !important;
    }

    .bg-light-purple {
      background-color: #9b59b6 !important;
    }

    .bg-green,
    bg-success {
      background-color: #27ae60 !important;
    }

    .bg-light-green {
      background-color: #2ecc71 !important;
    }

    .bg-orange,
    .bg-warning {
      background-color: #e82c0c !important;
    }

    .bg-light-orange {
      background-color: #ff530d !important;
    }

    .bg-pink {
      background-color: #fe31ab !important;
    }

    .bg-light-pink {
      background-color: #fd32c0 !important;
    }

    .color-white {
      color: white !important;
    }

    .color-green,
    .text-success {
      color: #27ae60 !important;
    }

    .color-light-green {
      color: #2ecc71 !important;
    }

    .color-blue,
    .text-info {
      color: #2980b9 !important;
    }

    .color-light-blue {
      color: #3498db !important;
    }

    .color-orange,
    .text-warning {
      color: #e82c0c !important;
    }

    .color-light-orange {
      color: #ff530d !important;
    }

    .color-red,
    .text-danger {
      color: #d40d12 !important;
    }

    .color-light-red {
      color: #ff1d23 !important;
    }

    .color-purple {
      color: #8e44ad !important;
    }

    .color-light-purple {
      color: #9b59b6 !important;
    }

    .color-pink {
      color: #fe31ab !important;
    }

    .color-light-pink {
      color: #fd32c0 !important;
    }

    .border-green {
      border: 4px solid #27ae60 !important;
    }

    .border-light-green {
      border: 4px solid #2ecc71 !important;
    }

    .border-blue {
      border: 4px solid #2980b9 !important;
    }

    .border-light-blue {
      border: 4px solid #3498db !important;
    }

    .border-orange {
      border: 4px solid #e82c0c !important;
    }

    .border-light-orange {
      border: 4px solid #ff530d !important;
    }

    .border-red {
      border: 4px solid #d40d12 !important;
    }

    .border-light-red {
      border: 4px solid #ff1d23 !important;
    }

    .border-purple {
      border: 4px solid #8e44ad !important;
    }

    .border-light-purple {
      border: 4px solid #9b59b6 !important;
    }

    .border-pink {
      border: 4px solid #fe31ab !important;
    }

    .border-light-pink {
      border: 4px solid #fd32c0 !important;
    }

    .border-top-green {
      border-top: 4px solid #27ae60 !important;
    }

    .border-top-light-green {
      border-top: 4px solid #2ecc71 !important;
    }

    .border-top-blue {
      border-top: 4px solid #2980b9 !important;
    }

    .border-top-light-blue {
      border-top: 4px solid #3498db !important;
    }

    .border-top-orange {
      border-top: 4px solid #e82c0c !important;
    }

    .border-top-light-orange {
      border-top: 4px solid #ff530d !important;
    }

    .border-top-red {
      border-top: 4px solid #d40d12 !important;
    }

    .border-top-light-red {
      border-top: 4px solid #ff1d23 !important;
    }

    .border-top-purple {
      border-top: 4px solid #8e44ad !important;
    }

    .border-top-light-purple {
      border-top: 4px solid #9b59b6 !important;
    }

    .border-top-pink {
      border-top: 4px solid #fe31ab !important;
    }

    .border-top-light-pink {
      border-top: 4px solid #fd32c0 !important;
    }

    .border-right-green {
      border-right: 4px solid #27ae60 !important;
    }

    .border-right-light-green {
      border-right: 4px solid #2ecc71 !important;
    }

    .border-right-blue {
      border-right: 4px solid #2980b9 !important;
    }

    .border-right-light-blue {
      border-right: 4px solid #3498db !important;
    }

    .border-right-orange {
      border-right: 4px solid #e82c0c !important;
    }

    .border-right-light-orange {
      border-right: 4px solid #ff530d !important;
    }

    .border-right-red {
      border-right: 4px solid #d40d12 !important;
    }

    .border-right-light-red {
      border-right: 4px solid #ff1d23 !important;
    }

    .border-right-purple {
      border-right: 4px solid #8e44ad !important;
    }

    .border-right-light-purple {
      border-right: 4px solid #9b59b6 !important;
    }

    .border-right-pink {
      border-right: 4px solid #fe31ab !important;
    }

    .border-right-light-pink {
      border-right: 4px solid #fd32c0 !important;
    }

    .border-bottom-green {
      border-bottom: 4px solid #27ae60 !important;
    }

    .border-bottom-light-green {
      border-bottom: 4px solid #2ecc71 !important;
    }

    .border-bottom-blue {
      border-bottom: 4px solid #2980b9 !important;
    }

    .border-bottom-light-blue {
      border-bottom: 4px solid #3498db !important;
    }

    .border-bottom-orange {
      border-bottom: 4px solid #e82c0c !important;
    }

    .border-bottom-light-orange {
      border-bottom: 4px solid #ff530d !important;
    }

    .border-bottom-red {
      border-bottom: 4px solid #d40d12 !important;
    }

    .border-bottom-light-red {
      border-bottom: 4px solid #ff1d23 !important;
    }

    .border-bottom-purple {
      border-bottom: 4px solid #8e44ad !important;
    }

    .border-bottom-light-purple {
      border-bottom: 4px solid #9b59b6 !important;
    }

    .border-bottom-pink {
      border-bottom: 4px solid #fe31ab !important;
    }

    .border-bottom-light-pink {
      border-bottom: 4px solid #fd32c0 !important;
    }

    .border-left-green {
      border-left: 4px solid #27ae60 !important;
    }

    .border-left-light-green {
      border-left: 4px solid #2ecc71 !important;
    }

    .border-left-blue {
      border-left: 4px solid #2980b9 !important;
    }

    .border-left-light-blue {
      border-left: 4px solid #3498db !important;
    }

    .border-left-orange {
      border-left: 4px solid #e82c0c !important;
    }

    .border-left-light-orange {
      border-left: 4px solid #ff530d !important;
    }

    .border-left-red {
      border-left: 4px solid #d40d12 !important;
    }

    .border-left-light-red {
      border-left: 4px solid #ff1d23 !important;
    }

    .border-left-purple {
      border-left: 4px solid #8e44ad !important;
    }

    .border-left-light-purple {
      border-left: 4px solid #9b59b6 !important;
    }

    .border-left-pink {
      border-left: 4px solid #fe31ab !important;
    }

    .border-left-light-pink {
      border-left: 4px solid #fd32c0 !important;
    }

    .bg2 {
      background-image: url("http://www.bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg");
    }

    .btn-blue {
      background-color: #3498db;
      border-color: #3498db;
      color: white;
    }

    .btn-blue:hover,
    .btn-blue:visited {
      background-color: #2980b9;
      color: white;
    }

    .btn-green {
      background-color: #2ecc71;
      border-color: #27ae60;
      color: white;
    }

    .btn-green:hover,
    .btn-green:visited {
      background-color: #27ae60;
      color: white;
    }

    .btn-orange {
      background-color: #ff530d;
      border-color: #e82c0c;
      color: white;
    }

    .btn-orange:hover,
    .btn-orange:visited {
      background-color: #e82c0c;
      color: white;
    }

    .btn-red {
      background-color: #ff1d23;
      border-color: #d40d12;
      color: white;
    }

    .btn-red:hover,
    .btn-red:visited {
      background-color: #d40d12;
      color: white;
    }

    .btn-purple {
      background-color: #9b59b6;
      border-color: #8e44ad;
      color: white;
    }

    .btn-purple:hover,
    .btn-purple:visited {
      background-color: #8e44ad;
      color: white;
    }

    .btn-pink {
      background-color: #fd32c0;
      border-color: #fe31ab;
      color: white;
    }

    .btn-pink:hover,
    .btn-pink:visited {
      background-color: #fe31ab;
      color: white;
    }

    .progress.progress-xs {
      height: 12px;
    }

    /* */
  </style>

  <script type="text/javascript">
    function goclicky(meh) {
      var x = screen.width / 2 - 850 / 2;
      var y = screen.height / 2 - 800 / 2;
      window.open(
        meh.href,
        "sharegplus",
        "height=800,width=850,left=" + x + ",top=" + y
      );
    }
  </script>
</body>

</html>