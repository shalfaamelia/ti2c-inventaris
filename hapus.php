<?php 
 
include("koneksi.php");  
if( isset($_GET['nomor']) ){ 
    $no = $_GET['nomor']; 

    $sql = "DELETE FROM printer WHERE nomor=$no"; 
    $query = mysqli_query($db, $sql); 
 
    if( $query ){ 
        header('Location: data_barang.php'); 
    } else { 
        die("Data belum berhasil dihapus"); 
    } 
}
 
?>