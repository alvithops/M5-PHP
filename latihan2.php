<!DOCTYPE html>
<html>
<body>
<?php
$str = "nama saya Susi Susanti";
$str2=strtolower($str);
echo $str2.'<br>';
$str2=strtoupper($str);
echo $str2.'<br>';
$str2=ucfirst($str);
echo $str2.'<br>';
$str2=ucwords($str);
echo $str2.'<br>';
$str2=strrev($str);
echo $str2.'<br>';
$panjang=strlen($str);
echo 'Panjang string: '.$panjang.'<br>';
$str2 = substr($str, 0, 4);
echo $str2.'<br>';
?>
</body>
</html>