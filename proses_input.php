<?php 
include("koneksi.php"); 

if(isset($_POST['simpan'])){ 
    $no = $_POST['nomor'];
    $nama_merek = $_POST['nama_merek']; 
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO printer (nomor, nama_merek, warna, jumlah) VALUE ('$no', '$nama_merek', '$warna', '$jumlah')"; 
        $query = mysqli_query($db, $sql); 
        if( $query ) { 
            header('Location: index.php?status=sukses'); 
        } else { 
            header('Location: index.php?status=gagal'); 
        } 
    }
?>