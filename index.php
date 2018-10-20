<?php

  $kadi = "instakullaniciadi";
  $sifre = "sifre";
  $file = "fotoğrafınadi"; //Örnek : deneme.jpg !!! Dosya türü jpg olmazsa çalışmaz !!! fotoğraf ayni dizinde olmalıdır
  $captionCount=0;

  require './vendor/autoload.php';
  ////////// CONFIG //////////
  $debug = false;
  $truncatedDebug = false;
  ///////////////////////////
  \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
  ///////////////////////////
  try{
    $ig = new \InstagramAPI\Instagram($debug,$truncatedDebug);
    $login = $ig->login($kadi,$sifre);//İnsta Login
    echo "Giriş Başarılı";
  }catch (Exception $e) {
    echo $e->getMessage();
  }



      
      while(true) {
        try{
          $ig->timeline->UploadPhoto($file, ['caption' => "aciklamakismi"]);
        }catch (Exception $e) {
          echo $e->getMessage();
        }
      }
?>

