<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);

?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Pasien</h3>
        <a href="pasien_create.php" class="btn btn-primary">+ Pasien</a>
    </div>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach($pasiens as $pasien) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $pasien['nama'] ?></td>
                <td><?= $pasien['tmp_lahir'] ?></td>
                <td><?= $pasien['tgl_lahir'] ?></td>
                <td><?= $pasien['gender'] ?></td>
                <td><?= $pasien['alamat'] ?></td>
                <td>
                    <a href="pasien_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="pasien_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php')
?>