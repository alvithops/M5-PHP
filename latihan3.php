<!DOCTYPE html>
<html>
<body>
<?php
$nominal = 2500000.45678;
echo number_format($nominal)."<br>";
echo number_format($nominal,2)."<br>";
echo number_format($nominal, 2, ",", ".");
?>
</body>
</html>