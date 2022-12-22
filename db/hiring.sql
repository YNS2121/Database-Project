-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Ara 2022, 17:35:34
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hiring`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cv`
--

CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `diller_dil_id` int(11) NOT NULL,
  `cv_adresi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `diller`
--

CREATE TABLE `diller` (
  `dil_id` int(11) NOT NULL,
  `dil_adi` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fotograflar`
--

CREATE TABLE `fotograflar` (
  `fotograf_id` int(11) NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL,
  `fotograf_adresi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL,
  `iletisim_tel_no` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(70) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `insan_kaynagi`
--

CREATE TABLE `insan_kaynagi` (
  `sirketler_sirket_id` int(11) NOT NULL,
  `insan_kaynagi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tanitim` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_teklif_acik` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_meslek_detay`
--

CREATE TABLE `kullanici_meslek_detay` (
  `kullanicilar_kullanici_id` int(11) NOT NULL,
  `alanlar_alan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meslekler`
--

CREATE TABLE `meslekler` (
  `meslek_id` int(11) NOT NULL,
  `meslek_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meslek_alanlar`
--

CREATE TABLE `meslek_alanlar` (
  `alan_id` int(11) NOT NULL,
  `meslekler_meslek_id` int(11) NOT NULL,
  `alan_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirketler`
--

CREATE TABLE `sirketler` (
  `sirket_id` int(11) NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL,
  `sirket_adi` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `sirket_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `sirket_misyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teklifler`
--

CREATE TABLE `teklifler` (
  `insan_kaynagi_id` int(11) NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE `videolar` (
  `video_id` int(11) NOT NULL,
  `video_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `video_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `video_zamani` date NOT NULL DEFAULT current_timestamp(),
  `video_adresi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanicilar_kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`),
  ADD KEY `diller_dil_id` (`diller_dil_id`);

--
-- Tablo için indeksler `diller`
--
ALTER TABLE `diller`
  ADD PRIMARY KEY (`dil_id`);

--
-- Tablo için indeksler `fotograflar`
--
ALTER TABLE `fotograflar`
  ADD PRIMARY KEY (`fotograf_id`),
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`),
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`);

--
-- Tablo için indeksler `insan_kaynagi`
--
ALTER TABLE `insan_kaynagi`
  ADD KEY `insan_kaynagi_id` (`insan_kaynagi_id`),
  ADD KEY `sirketler_sirket_id` (`sirketler_sirket_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `kullanici_meslek_detay`
--
ALTER TABLE `kullanici_meslek_detay`
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`),
  ADD KEY `alanlar_alan_id` (`alanlar_alan_id`);

--
-- Tablo için indeksler `meslekler`
--
ALTER TABLE `meslekler`
  ADD PRIMARY KEY (`meslek_id`);

--
-- Tablo için indeksler `meslek_alanlar`
--
ALTER TABLE `meslek_alanlar`
  ADD PRIMARY KEY (`alan_id`),
  ADD KEY `meslekler_meslek_id` (`meslekler_meslek_id`);

--
-- Tablo için indeksler `sirketler`
--
ALTER TABLE `sirketler`
  ADD PRIMARY KEY (`sirket_id`),
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`);

--
-- Tablo için indeksler `teklifler`
--
ALTER TABLE `teklifler`
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`),
  ADD KEY `insan_kaynagi_id` (`insan_kaynagi_id`);

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `kullanicilar_kullanici_id` (`kullanicilar_kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `diller`
--
ALTER TABLE `diller`
  MODIFY `dil_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `fotograflar`
--
ALTER TABLE `fotograflar`
  MODIFY `fotograf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `meslekler`
--
ALTER TABLE `meslekler`
  MODIFY `meslek_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `meslek_alanlar`
--
ALTER TABLE `meslek_alanlar`
  MODIFY `alan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sirketler`
--
ALTER TABLE `sirketler`
  MODIFY `sirket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`),
  ADD CONSTRAINT `cv_ibfk_2` FOREIGN KEY (`diller_dil_id`) REFERENCES `diller` (`dil_id`);

--
-- Tablo kısıtlamaları `fotograflar`
--
ALTER TABLE `fotograflar`
  ADD CONSTRAINT `fotograflar_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`);

--
-- Tablo kısıtlamaları `iletisim`
--
ALTER TABLE `iletisim`
  ADD CONSTRAINT `iletisim_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`);

--
-- Tablo kısıtlamaları `insan_kaynagi`
--
ALTER TABLE `insan_kaynagi`
  ADD CONSTRAINT `insan_kaynagi_ibfk_1` FOREIGN KEY (`insan_kaynagi_id`) REFERENCES `kullanicilar` (`kullanici_id`),
  ADD CONSTRAINT `insan_kaynagi_ibfk_2` FOREIGN KEY (`sirketler_sirket_id`) REFERENCES `sirketler` (`sirket_id`);

--
-- Tablo kısıtlamaları `kullanici_meslek_detay`
--
ALTER TABLE `kullanici_meslek_detay`
  ADD CONSTRAINT `kullanici_meslek_detay_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`),
  ADD CONSTRAINT `kullanici_meslek_detay_ibfk_2` FOREIGN KEY (`alanlar_alan_id`) REFERENCES `meslek_alanlar` (`alan_id`);

--
-- Tablo kısıtlamaları `meslek_alanlar`
--
ALTER TABLE `meslek_alanlar`
  ADD CONSTRAINT `meslek_alanlar_ibfk_1` FOREIGN KEY (`meslekler_meslek_id`) REFERENCES `meslekler` (`meslek_id`);

--
-- Tablo kısıtlamaları `sirketler`
--
ALTER TABLE `sirketler`
  ADD CONSTRAINT `sirketler_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`);

--
-- Tablo kısıtlamaları `teklifler`
--
ALTER TABLE `teklifler`
  ADD CONSTRAINT `teklifler_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`),
  ADD CONSTRAINT `teklifler_ibfk_2` FOREIGN KEY (`insan_kaynagi_id`) REFERENCES `insan_kaynagi` (`insan_kaynagi_id`);

--
-- Tablo kısıtlamaları `videolar`
--
ALTER TABLE `videolar`
  ADD CONSTRAINT `videolar_ibfk_1` FOREIGN KEY (`kullanicilar_kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
