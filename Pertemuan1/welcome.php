<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
    <body>
        <h3>Selamat Belajar Web</h3>
        <?php
        $_nama = "Budi Darmawan";
        $_umur = 20;
        $_berat = 60.5;
        $_prodi = "Sistem informasi";
        $_kampus = "STT Terpadu Nurul Fikri";
        echo "Nama saya $_nama, umur saya $_umur tahun";
        echo "<br>";
        ?>
        <hr/>
        <?php
        echo "berat badan saya $_berat kg";
        echo "<br>";
        echo "Saya kuliah di prodi $_prodi";
        ?>
        <br> saya kuliah di kampus <strong><?= $_kampus ?></strong>
    </body>
</html>