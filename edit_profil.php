<?php
include('db/conDB.php');
$userID = $_GET["userID"];

$sqlFetchUserInfo = "SELECT * from kullanicilar where kullanici_id = '$userID'";
$sqlIletisim = "SELECT * FROM iletisim where kullanicilar_kullanici_id = '$userID'";
$resultFetchUserInfo = mysqli_query($con, $sqlFetchUserInfo);
$resultIletisim = mysqli_query($con, $sqlIletisim);
$rowUser = $resultFetchUserInfo->fetch_assoc();
$rowIletisim = $resultIletisim->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <title>Hesap Ayarları</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">Hesap Ayarları</h4>

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Profili Düzenle</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Hakkında</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-cv">CV Yükle</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-video">Video Yükle</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Şifreyi Değiştir</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body media align-items-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80" />
                  <div class="media-body ml-4">
                    <label class="btn btn-outline-primary">
                      Yeni profil fotoğrafı yükle
                      <input type="file" name="img" class="account-settings-fileinput " />
                    </label>
                    &nbsp;
                    <button type="submit" name="uploadImg" class="btn btn-default md-btn-flat">
                      Yukle
                    </button>
                    <div class="text-light small mt-1">
                      Resim JPG, GIF veya PNG formatında olmalıdır. Resmin
                      maksimum boyutu 800k olmalıdır.
                    </div>
                  </div>
                </div>
              </form>
              <hr class="border-light m-0" />
            </div>
            <div class="tab-pane fade" id="account-change-password">
              <form action="" method="POST">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Geçerli şifre</label>
                    <input type="password" value="<?php echo $rowUser["kullanici_sifre"]; ?>" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label class="form-label">Yeni şifre</label>
                    <input type="password" name="newPassword" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label class="form-label">Yeni şifre'yi tekrar giriniz.</label>
                    <input type="password" name="newPasswordConfirm" class="form-control" />
                  </div>
                </div>
                <button type="submit" name="submitUserPasswordInfo" class="btn btn-primary">
                  Değişiklikleri kaydet</button>
              </form>
            </div>
            <div class="tab-pane fade" id="account-cv">
              <div class="card-body pb-2">
                <div class="cv-body bd1">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <?php
                      $sqlDil = "SELECT * FROM diller;";
                      $resultDil = mysqli_query($con, $sqlDil);
                      ?>
                      <label class="form-label">Lütfen CV dilini seçiniz.</label>
                      <select class="custom-select" name="lang">
                        <option>Bir dil seçiniz</option>
                        <?php
                        foreach ($resultDil as $i) { ?>
                          <option value="<?php echo $i["dil_id"]; ?>"><?php echo $i["dil_adi"]; ?></option>
                        <?php }
                        ?>
                      </select>
                    </div>
                    <label class="btn btn-outline-primary">
                      Yeni CV yükle
                      <input type="file" name="cv" class="account-settings-fileinput" />
                    </label>
                    <button type="submit" name="uploadCv" class="btn btn-default md-btn-flat">
                      Yükle
                    </button>
                  </form>
                  <div class="text-light small mt-1">
                    CV'nin formatı PDF veya Word olmalıdır.
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="account-video">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body pb-2">
                  <div class="cv-body bd1">
                    <label class="btn btn-outline-primary">
                      Yeni Video yükle
                      <input type="file" name="video" class="account-settings-fileinput" />
                    </label>
                    &nbsp;
                    <button type="submit" name="uploadVideo" class="btn btn-default md-btn-flat">
                      Video'yu yükle
                    </button>

                    <div class="text-light small mt-1">
                      Video'nun formatı mp3 veya mp4 olmalıdır.Maksimum video
                      boyutu 10mb olsun.
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="account-info">
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $rowUser['kullanici_ad']; ?>" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="surname" value="<?php echo $rowUser['kullanici_soyad']; ?>" />
                  </div>
                </div>
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Biografi</label>
                    <textarea class="form-control" rows="5" name="aboutMe"><?php echo $rowUser['kullanici_tanitim']; ?></textarea>
                  </div>
                </div>
                <hr class="border-light m-0" />
                <div class="card-body pb-2">
                  <h6 class="mb-4">İletişim</h6>
                  <div class="form-group">
                    <label class="form-label">Telefon</label>
                    <input type="tel" class="form-control" name="tel" value="<?php echo $rowIletisim['iletisim_tel_no']; ?>" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input type="text" class="form-control mb-1" name="email" value="<?php echo $rowIletisim['iletisim_mail']; ?>" />
                  </div>
                  <button type="submit" name="submitUserInfo" class="btn btn-primary">
                    Değişiklikleri kaydet</button>
                </div>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>

    <div class="text-right mt-3">
      <button type="button" onclick="window.close();" class="cancelbtn">
        İptal
      </button>
    </div>
  </div>
  <style type="text/css">
    body {
      background: #f5f5f5;
      margin-top: 20px;
    }

    .ui-w-80 {
      width: 80px !important;
      height: auto;
    }

    .btn-default {
      border-color: rgba(24, 28, 33, 0.1);
      background: rgba(0, 0, 0, 0);
      color: #4e5155;
    }

    label.btn {
      margin-bottom: 0;
    }

    .btn-outline-primary {
      border-color: #26b4ff;
      background: transparent;
      color: #26b4ff;
    }

    .btn {
      cursor: pointer;
    }

    .text-light {
      color: #babbbc !important;
    }

    .btn-facebook {
      border-color: rgba(0, 0, 0, 0);
      background: #3b5998;
      color: #fff;
    }

    .btn-instagram {
      border-color: rgba(0, 0, 0, 0);
      background: #000;
      color: #fff;
    }

    .card {
      background-clip: padding-box;
      box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
    }

    .row-bordered {
      overflow: hidden;
    }

    .account-settings-fileinput {
      position: absolute;
      visibility: hidden;
      width: 1px;
      height: 1px;
      opacity: 0;
    }

    .account-settings-links .list-group-item.active {
      font-weight: bold !important;
    }

    html:not(.dark-style) .account-settings-links .list-group-item.active {
      background: transparent !important;
    }

    .account-settings-multiselect~.select2-container {
      width: 100% !important;
    }

    .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }

    .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }

    .material-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }

    .material-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }

    .dark-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(255, 255, 255, 0.03) !important;
    }

    .dark-style .account-settings-links .list-group-item.active {
      color: #fff !important;
    }

    .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }

    .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }
  </style>

  <script type="text/javascript"></script>
</body>

</html>
<?php
if (isset($_POST["uploadImg"])) {
  $filename = $_FILES["img"]["name"];
  $tempname = $_FILES["img"]["tmp_name"];
  $folder = "uploads/" . $filename;
  if (move_uploaded_file($tempname, $folder)) {
    $sqlImg = "insert into fotograflar (fotograf_adresi, kullanicilar_kullanici_id) values ('$filename','$userID')";
    if (mysqli_query($con, $sqlImg)) {
?>
      <script type="text/javascript">
        location.href = 'http://localhost/Hire/edit_profil.php?userID=<?php echo $userID; ?>';
      </script>
    <?php
    } else {
      echo "basarisiz";
    }
  } else {
    echo "Hatda";
  }
}

if (isset($_POST["uploadCv"])) {
  $filename = $_FILES["cv"]["name"];
  $tempname = $_FILES["cv"]["tmp_name"];
  $folder = "uploadsCv/" . $filename;
  $lang = $_POST["lang"];
  if (move_uploaded_file($tempname, $folder)) {
    $sqlCvUpload = "insert into cv (diller_dil_id, cv_adresi, kullanicilar_kullanici_id) values ('$lang', '$filename', '$userID')";
    if (mysqli_query($con, $sqlCvUpload)) {
    ?>
      <script type="text/javascript">
        location.href = 'http://localhost/Hire/edit_profil.php?userID=<?php echo $userID; ?>';
      </script>
    <?php
    } else {
      echo "basarisiz";
    }
  } else {
    echo "Hatda";
  }
}

if (isset($_POST["uploadVideo"])) {
  $filename = $_FILES["video"]["name"];
  $tempname = $_FILES["video"]["tmp_name"];
  $folder = "uploadsVideo/" . $filename;
  if (move_uploaded_file($tempname, $folder)) {
    $sqlVideoUpload = "insert into videolar (video_adresi, kullanicilar_kullanici_id) values ('$filename', '$userID')";
    if (mysqli_query($con, $sqlVideoUpload)) {
    ?>
      <script type="text/javascript">
        location.href = 'http://localhost/Hire/edit_profil.php?userID=<?php echo $userID; ?>';
      </script>
    <?php
    } else {
      echo "basarisiz";
    }
  } else {
    echo "Hatda";
  }
}

if (isset($_POST["submitUserInfo"])) {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $aboutMe = $_POST["aboutMe"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];

  $sqlUserUpdate = "UPDATE kullanicilar SET kullanici_ad = '$name', kullanici_soyad = '$surname', kullanici_tanitim = '$aboutMe', kullanici_email = '$email' WHERE kullanici_id = '$userID'";
  $sqlIletisimUpdate = "UPDATE iletisim SET iletisim_tel_no = '$tel', iletisim_mail = '$email' WHERE kullanicilar_kullanici_id = '$userID'";
  if (mysqli_query($con, $sqlUserUpdate) && mysqli_query($con, $sqlIletisimUpdate)) {
    ?>
    <script type="text/javascript">
      location.href = 'http://localhost/Hire/edit_profil.php?userID=<?php echo $userID; ?>';
    </script>
    <?php
  } else {
    echo "basarısız";
  }
}

if (isset($_POST["submitUserPasswordInfo"])) {
  $newPassword = $_POST["newPassword"];
  $newPasswordConfirm = $_POST["newPasswordConfirm"];

  if ($newPassword == $newPasswordConfirm) {
    $sqlPasswordUpdate = "UPDATE kullanicilar SET kullanici_sifre = '$newPassword' WHERE kullanici_id = '$userID'";
    if (mysqli_query($con, $sqlPasswordUpdate)) {
    ?>
      <script type="text/javascript">
        location.href = 'http://localhost/Hire/edit_profil.php?userID=<?php echo $userID; ?>';
      </script>
<?php
    } else {
      echo "HATA";
    }
  } else {
    echo "Sifreler uyusmuyor";
  }
}
?>