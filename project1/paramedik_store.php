<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$gender= $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// buat query insert
$query = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telepon, alamat, unit_kerja_id) VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telepon', '$alamat', '$unit_kerja_id')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data";
}
?>
