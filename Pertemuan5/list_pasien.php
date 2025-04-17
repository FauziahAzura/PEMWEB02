<?php
require_once "dbkoneksi.php";
include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";

// 4) buat query SQL
$list_pasien = $dbh->query("SELECT * FROM pasien");
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>kode</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>aksi</th>
       </tr>
</th>
    </thead>
    <tbody>
        <?php $no = 1; foreach($list_pasien as $pasien) : ?>
        <tr>
            <td>
                <?= $no++; ?>
            </td>
            <td><?= $pasien['kode']; ?></td>
            <td><?= $pasien['nama']; ?></td>
            <td><?= $pasien['gender']; ?></td>
            <td><?= $pasien['alamat']; ?></td>
            <td>
                <a href="proses_pasien.php?edit=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                <a href="proses_pasien.php?delete=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once "template/bottom.php"; ?>