<?php
$aylar = array("Ocak", "Subat", "Mart"); // dizi tanimlamak icin
//$aylar = ["Ocak", "Subat", "Moyota"];
print_r($aylar); // Detayli gosterme
echo "<br />";
var_dump($aylar);
echo "<br />";
echo count ($aylar); //dizini elemalarini gosterir
$ogrencino = [
"202151502051" => "Emir Faruk",
"202151502052" => "ahmet tr",
"202151502053" => "hakan ozkok",
"202151502054" => "ali enkor",

];
echo "<br />";
echo $aylar[1];
echo "<br />";
echo $ogrencino[202151502051];

$sehir =[ 
   "Balikesir",
   "Adana",
   "izmir",
   "Kutahya",
   "Artvin"
];
echo "<br />";
$indis = count($sehir)-1;
echo $sehir[count($sehir)-1]; // son elemani yazdirir

for ($i=0; $i<count($sehir); $i++) {
    echo $sehir[$i];
    echo "<br />";
}
//echo "<hr />";
while (true) {
echo $sehir[count($sehir)-1];
break;
}





?>