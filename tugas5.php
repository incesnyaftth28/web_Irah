<?php
$bln = date("M");
$hari1 = 29;
$hari2 = 30;
$hari3 = 31;
switch($bln)
{
case "Jan" : $namaBln = "Januari";
$hari3 = 31;
break;
case "Feb" : $namaBln = "Februari";
$hari1 = 29;
break;
case "Mar" : $namaBln = "Maret";
$hari3 = 31;
break;
case "Apr" : $namaBln = "April";
$hari2 = 30;
break;
case "May" : $namaBln = "Mei";
$hari3 = 31;
break;
case "Jun" : $namaBln = "Juni";
$hari2 = 30;
break;
case "Jul" : $namaBln = "Juli";
$hari3 = 31;
break;
case "Aug" : $namaBln = "Agustus";
$hari3 = 31;
break;
case "Sep" : $namaBln = "September";
$hari2 = 30;
break;
case "Oct" : $namaBln = "Oktober";
$hari3 = 31;
break;
case "Nov" : $namaBln = "November";
$hari2 = 30;
break;
case "Dec" : $namaBln = "Desember";
$hari3 = 31;
break;
}
echo "Nama bulan sekarang adalah : ".$namaBln;
echo " dan ada " .$hari2;
echo " hari ";
?>