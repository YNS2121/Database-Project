<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Hesap Ayarları</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div class="container light-style flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-4">Hesap Ayarları</h4>

      <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
          <div class="col-md-3 pt-0">
            <div class="list-group list-group-flush account-settings-links">
              <a
                class="list-group-item list-group-item-action active"
                data-toggle="list"
                href="#account-general"
                >Profili Düzenle</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-info"
                >Hakkında</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-cv"
                >CV Yükle</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-video"
                >Video Yükle</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-change-password"
                >Şifreyi Değiştir</a
              >
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="account-general">
                <div class="card-body media align-items-center">
                  <img
                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                    alt=""
                    class="d-block ui-w-80"
                  />
                  <div class="media-body ml-4">
                    <label class="btn btn-outline-primary">
                      Yeni profil fotoğrafı yükle
                      <input type="file" class="account-settings-fileinput" />
                    </label>
                    &nbsp;
                    <button type="button" class="btn btn-default md-btn-flat">
                      Sıfırla
                    </button>

                    <div class="text-light small mt-1">
                      Resim JPG, GIF veya PNG formatında olmalıdır. Resmin
                      maksimum boyutu 800k olmalıdır.
                    </div>
                  </div>
                </div>
                <hr class="border-light m-0" />

                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" value="Nelle" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Soyad</label>
                    <input type="text" class="form-control" value="Maxwell" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input
                      type="text"
                      class="form-control mb-1"
                      value="nmaxwell@mail.com"
                    />
                    <div class="alert alert-warning mt-3">
                      Email adresiniz doğrulanmadı. Lütfen gelen kutunuzu
                      kontrol ediniz.<br />
                      <a href="javascript:void(0)">Tekrar Dene</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Şirket</label>
                    <input
                      type="text"
                      class="form-control"
                      value="Company Ltd."
                    />
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="account-change-password">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Geçerli şifre</label>
                    <input type="password" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label class="form-label">Yeni şifre</label>
                    <input type="password" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label class="form-label"
                      >Yeni şifre'yi tekrar giriniz.</label
                    >
                    <input type="password" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="account-cv">
                <div class="card-body pb-2">
                  <div class="cv-body bd1">
                    <div class="form-group">
                      <label class="form-label"
                        >Lütfen CV dilini seçiniz.</label
                      >
                      <select class="custom-select">
                        <option>Almanca</option>
                        <option>Arapça</option>
                        <option>Çince</option>
                        <option>Fransızca</option>
                        <option>İngilizce</option>
                        <option>İspanyolca</option>
                        <option>İtalyanca</option>
                        <option>Japonca</option>
                        <option selected="">Türkçe</option>
                        <option>Korece</option>
                        <option>Portekizce</option>
                        <option>Rusça</option>
                        <option selected="">Türkçe</option>
                      </select>
                    </div>

                    <label class="btn btn-outline-primary">
                      Yeni CV yükle
                      <input type="file" class="account-settings-fileinput" />
                    </label>
                    &nbsp;
                    <button type="button" class="btn btn-default md-btn-flat">
                      İptal
                    </button>

                    <div class="text-light small mt-1">
                      CV'nin formatı PDF veya Word olmalıdır.
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="account-video">
                <div class="card-body pb-2">
                  <div class="cv-body bd1">
                    <label class="btn btn-outline-primary">
                      Yeni Video yükle
                      <input type="file" class="account-settings-fileinput" />
                    </label>
                    &nbsp;
                    <button type="button" class="btn btn-default md-btn-flat">
                      İptal
                    </button>

                    <div class="text-light small mt-1">
                      Video'nun formatı mp3 veya mp4 olmalıdır.Maksimum video
                      boyutu 10mb olsun.
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="account-info">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Biografi</label>
                    <textarea class="form-control" rows="5">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea
                    >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Doğum tarihi</label>
                    <input
                      type="text"
                      class="form-control"
                      value="May 3, 1995"
                    />
                  </div>
                </div>
                <hr class="border-light m-0" />
                <div class="card-body pb-2">
                  <h6 class="mb-4">İletişim</h6>
                  <div class="form-group">
                    <label class="form-label">Telefon</label>
                    <input
                      type="text"
                      class="form-control"
                      value="+0 (123) 456 7891"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">
          Değişiklikleri kaydet</button
        >&nbsp;
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

      .account-settings-multiselect ~ .select2-container {
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
