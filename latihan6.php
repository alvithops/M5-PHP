<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Generator Kode Barang</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 15px;
            width: 300px;
        }

        legend {
            font-weight: bold;
        }

        .hasil {
            margin-top: 15px;
            font-weight: bold;
            color: blue;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .btn {
            margin-top: 10px;
            cursor: pointer;
            padding: 8px 15px;
        }
    </style>
</head>

<body>

    <h2>Generator Kode Barang</h2>

    <form action="" method="post">
        <fieldset>
            <legend>Input Kode Barang</legend>

            <label>Kode Depan (Jenis)</label><br>
            <select name="jenis">
                <option value="">-Pilih-</option>
                <option value="C">Celana</option>
                <option value="K">Kaos</option>
                <option value="H">Hem</option>
            </select><br><br>

            <label>Kode Tengah (Nomor Seri)</label><br>
            <input type="text" name="nomor_seri" maxlength="6" placeholder="Maks 6 digit"><br><br>

            <label>Kode Belakang (Merek)</label><br>
            <input type="text" name="merek" placeholder="Nama merek">
        </fieldset>

        <input type="submit" value="Buat Kode" class="btn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kode = array();

        // 1. Ambil dan validasi Jenis
        if (!empty($_POST["jenis"])) {
            $kode[] = $_POST["jenis"];
        }

        // 2. Ambil dan format Nomor Seri (Padding 0 ke kiri hingga 6 digit)
        if (!empty($_POST["nomor_seri"])) {
            $kode[] = str_pad($_POST["nomor_seri"], 6, "0", STR_PAD_LEFT);
        }

        // 3. Ambil dan bersihkan Merek
        if (!empty($_POST["merek"])) {
            $kode[] = strtoupper(trim($_POST["merek"])); // Dijadikan huruf kapital
        }

        // Cek jika ketiga komponen lengkap
        if (count($kode) == 3) {
            $set_kode = implode("-", $kode);
            echo "<div class='hasil'>Kode Barang: $set_kode</div>";
        } else {
            echo "<div class='hasil' style='color:red;'>Silakan lengkapi semua input!</div>";
        }
    }
    ?>

</body>

</html>