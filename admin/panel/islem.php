<?php 
ob_start();
session_start();

include 'baglan.php';

// bir dosya ya da dizinin boş olup olmadığını kontrol eder
if (isset($_POST['admingiris'])) {
  $admin_mail=$_POST['admin_mail'];
  $admin_password=md5($_POST['admin_password']);

$adminsor=$db->prepare("SELECT * FROM kullanici where admin_mail=:mail and admin_password=:password and admin_yetki=:yetki "); // database kancası sağlar
$adminsor->execute(array(
  'mail'=>$admin_mail,
  'password'=>$admin_password,
  'yetki'=>1
  ));

echo  $saydir=$adminsor->rowCount();

if ($saydir==1) {

  $_SESSION['admin_mail']=$admin_mail;
  header("Location:index.php");
  exit;
}
else 
{
   header("Location:login.php?durum=basarisiz");
   echo "Yetkisiz Giriş Yapmaya Çalışıyorsunuz !";
   exit;
}
}










if (isset($_POST['genelayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
      ayar_sitetitle=:ayar_sitetitle,
      ayar_sitedescription=:ayar_sitedescription,
      ayar_sitekeywords=:ayar_sitekeywords,
      ayar_siteauthor=:ayar_siteauthor
      WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
     
     'ayar_sitetitle'=> $_POST['ayar_sitetitle'],
     'ayar_sitedescription'=> $_POST['ayar_sitedescription'],
     'ayar_sitekeywords'=> $_POST['ayar_sitekeywords'],
     'ayar_siteauthor'=> $_POST['ayar_siteauthor']
));

   if ($update)
    {
   header("Location:genelayar.php?islemdurum=ok");
    }
 else {
	header("Location:genelayar.php?islemdurum=no");
    }

}



if (isset($_POST['iletisimayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
      ayar_sitetel=:ayar_sitetel,
      ayar_sitegsm=:ayar_sitegsm,
      ayar_sitefaks=:ayar_sitefaks,
      ayar_sitemail=:ayar_sitemail,
      ayar_siteilce=:ayar_siteilce,
      ayar_siteil=:ayar_siteil,
      ayar_siteadres=:ayar_siteadres,
      ayar_sitemesai=:ayar_sitemesai

      WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
     
     'ayar_sitetel'=> $_POST['ayar_sitetel'],
     'ayar_sitegsm'=> $_POST['ayar_sitegsm'],
     'ayar_sitefaks'=> $_POST['ayar_sitefaks'],
     'ayar_sitemail'=> $_POST['ayar_sitemail'],
     'ayar_siteilce'=> $_POST['ayar_siteilce'],
     'ayar_siteil'=> $_POST['ayar_siteil'],
     'ayar_siteadres'=> $_POST['ayar_siteadres'],
     'ayar_sitemesai'=> $_POST['ayar_sitemesai']
));

   if ($update)
    {
   header("Location:iletisimayar.php?islemdurum=ok");
    }
 else {
	header("Location:iletisimayar.php?islemdurum=no");
    }

}



if (isset($_POST['apiayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
      ayar_siteanalystic=:ayar_siteanalystic,
      ayar_sitemaps=:ayar_sitemaps,
      ayar_sitezoopim=:ayar_sitezoopim
      WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
     
     'ayar_siteanalystic'=> $_POST['ayar_siteanalystic'],
     'ayar_sitemaps'=> $_POST['ayar_sitemaps'],
     'ayar_sitezoopim'=> $_POST['ayar_sitezoopim']
));

   if ($update)
    {
   header("Location:apiayar.php?islemdurum=ok");
    }
 else {
	header("Location:apiayar.php?islemdurum=no");
    }

}



if (isset($_POST['sosyalayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
      ayar_facebook=:ayar_facebook,
      ayar_twitter=:ayar_twitter,
      ayar_instagram=:ayar_instagram,
      ayar_youtube=:ayar_youtube
      WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
     
     'ayar_facebook'=> $_POST['ayar_facebook'],
     'ayar_twitter'=> $_POST['ayar_twitter'],
     'ayar_instagram'=> $_POST['ayar_instagram'],
     'ayar_youtube'=> $_POST['ayar_youtube']
));

   if ($update)
    {
   header("Location:sosyalayar.php?islemdurum=ok");
    }
 else {
	header("Location:sosyalayar.php?islemdurum=no");
    }

}



if (isset($_POST['mailayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
      ayar_smtphost=:ayar_smtphost,
      ayar_smtpuser=:ayar_smtpuser,
      ayar_smtppassword=:ayar_smtppassword,
      ayar_smtpport=:ayar_smtpport
      WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
     
     'ayar_smtphost'=> $_POST['ayar_smtphost'],
     'ayar_smtpuser'=> $_POST['ayar_smtpuser'],
     'ayar_smtppassword'=> $_POST['ayar_smtppassword'],
     'ayar_smtpport'=> $_POST['ayar_smtpport']
));

   if ($update)
    {
   header("Location:mailayar.php?islemdurum=ok");
    }
 else {
	header("Location:mailayar.php?islemdurum=no");
    }

}




if (isset($_POST['hakkimizdaayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET 
      hakkimizda_baslik=:hakkimizda_baslik,
      hakkimizda_icerik=:hakkimizda_icerik,
      hakkimizda_video=:hakkimizda_video,
      hakkimizda_gizlilik=:hakkimizda_gizlilik,
      hakkimizda_sartlar=:hakkimizda_sartlar
      WHERE hakkimizda_id=0");

    $update=$ayarkaydet->execute(array(
     
     'hakkimizda_baslik'=> $_POST['hakkimizda_baslik'],
     'hakkimizda_icerik'=> $_POST['hakkimizda_icerik'],
     'hakkimizda_video'=> $_POST['hakkimizda_video'],
     'hakkimizda_gizlilik'=> $_POST['hakkimizda_gizlilik'],
     'hakkimizda_sartlar'=> $_POST['hakkimizda_sartlar']
));

   if ($update)
    {
   header("Location:hakkimizda.php?islemdurum=ok");
    }
 else {
	header("Location:hakkimizda.php?islemdurum=no");
    }

}



if (isset($_POST['servisduzenle'])) {

  $servis_id=$_POST['servis_id'];

  $serviskaydet=$db->prepare("UPDATE servisler SET
    servis_baslik=:servis_baslik,
    servis_icerik=:servis_icerik,
    servis_detay=:servis_detay
    WHERE servis_id={$_POST['servis_id']}");

  $update=$serviskaydet->execute(array(
    'servis_baslik' => $_POST['servis_baslik'],
    'servis_icerik' => $_POST['servis_icerik'],
    'servis_detay' => $_POST['servis_detay']
    ));


  if ($update) {

    Header("Location:servisler.php?servis_id=$servis_id&durum=basarili");

  } else {

    Header("Location:servisler.php?servis_id=$servis_id&durum=basarisiz");
  }

}

if ($_GET['servissil']=="ok") {

  $sil=$db->prepare("DELETE from servisler where servis_id=:id");
  $kontrol=$sil->execute(array(
    'id' => $_GET['servis_id']
    ));


  if ($kontrol) {


    header("location:../servisler.php?sil=ok");


  } else {

    header("location:../servisler.php?sil=basarisiz");

  }


}





if (isset($_POST['servisekle'])) {



  $servisekle=$db->prepare("INSERT  INTO serSvisler  SET
    servis_baslik=:servis_baslik,
    servis_icerik=:servis_icerik,
    servis_detay=:servis_detay
    ");

  $ekle=$servisekle->execute(array(
    'servis_baslik' => $_POST['servis_baslik'],
    'servis_icerik' => $_POST['servis_icerik'],
    'servis_detay' => $_POST['servis_detay'],
    ));


  if ($ekle) {

    Header("Location:servisler.php?ekleme_basarili");

  } else {

    Header("Location:servisler.php?ekleme_basarili");
  }

}










?>