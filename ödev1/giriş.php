<html>
<head>
    <meta charset="utf-8">
    <title> Giriş Uygulaması</title>
</head>
<body>
<?php
echo "<h1> Giriş Ekanı</h1>";
?>
<form action="giriş.php" method="post">
 isim/Soyisim: <br/>
 <input type="text" name="isim" /><br/>
 kullanici adi: <br/>
 <input type="text" name="kullanici_adi" /><br/>
 Sifre: <br/>
 <input type="password" name="sifre" /><br/>
 Cinsiyet: <br/>
 <input type="radio" name="cinsiyet" value="er" /> Erkek<br/>
 <input type="radio" name="cinsiyet" value="ka" /> Kadin<br/>
 <input type="submit" value="Kayit ol" />
</form>
<p> Giris Icin  Butona Tıklayınız</p>
<form action="kayıtekranı.php" method="post">
        <input type ="submit" value ="login"  />
    </form> 
</body>
</html>