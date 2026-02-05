<!DOCTYPE html>
<html>

<body>
    <?php
    $angkaAcak = rand(1, 100);
    echo "Bulatan acak : $angkaAcak <br>";
    $akar = sqrt(100);
    echo "Akar 100 : $akar <br>";
    $desimal = 123.6783;
    echo "Nilai desimal : $desimal <br>";
    $pembulatan = floor($desimal);
    echo "Pembulatan ke bawah : $pembulatan <br>";
    $pembulatanNaik = ceil($desimal);
    echo "Pembulatan ke atas : $pembulatanNaik <br>";
    $pendekatan = round($desimal, 2);
    echo "Pendekatan nilai : $pendekatan <br>";
    3
        ?>
</body>

</html>