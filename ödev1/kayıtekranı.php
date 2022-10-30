<?php
session_start();
$message = "";
echo "<h1> Kayıt Ekranı </h1>";
 if(isset($_POST["kullanici_adi"]) && isset($_POST["sifre"])) {
    $kullanici_adi = "Faruk";
    $sifre = "1234";

        if($_POST["kullanici_adi"] == $kullanici_adi && $_POST["sifre"] == $sifre ) {
            $message = "Giriş  Başarılı";
            include_once("anasayfa.php");
        }
        else {
            $message = "Hatalı Girdiniz Lütfen Tekrar Deneyin!!";
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Form Uygulamalari </title>
</head>
<body>
    <p><?php echo $message; ?> </p>
    <form  method="post">
        <input type ="text" name ="kullanici_adi" placeholder="Faruk" />
        <input type ="password" name ="sifre" placeholder="1234" />
        <input type ="submit" value ="login"  />
    </form>
</body>
</html>