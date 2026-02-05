<!DOCTYPE html>
<html>
<body>
<?php
$angka_hari = $_POST["angka_hari"];
$bulan = $_POST["bulan"];
$tahun = $_POST["tahun"];
$time_tanggal = mktime(0,0,0,$bulan,$angka_hari,$tahun);
$tanggal = date("l, j F Y", $time_tanggal);
echo "Format Tanggal: $tanggal";
?>
</body>
</html>