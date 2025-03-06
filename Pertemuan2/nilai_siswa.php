<?php

if (isset($_POST['submit'])) {
  
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<P> Nama: $nama </P>";
    echo "<P> Mata Kuliah: $matkul </P>";
    echo "<P> Nilai UTS: $nilai_uts </P>";
    echo "<P> Nilai UAS: $nilai_uas </P>";
    echo "<P> Nilai Tugas: $nilai_tugas </P>";
    // Status Kelulusan
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // check nilai total
    if ($nilai_total > 55) {
        echo "<p>Status : Lulus</p>";
    } else {
        echo "<p>Status : Tidak Lulus</p>";
    }
    }
