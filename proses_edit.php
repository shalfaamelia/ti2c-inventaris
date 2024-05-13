<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST['nomor'];
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    if (empty($nama_merek) || empty($warna) || empty($jumlah)) {
        echo "Semua field harus diisi!";
        exit;
    }

    $query = "UPDATE printer SET nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah' WHERE nomor='$nomor'";
    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location: data_barang.php");
        exit;
    } else {
        echo "Data gagal diperbarui.";
    }
} else {
    echo "Akses Gagal.";
}
?>
