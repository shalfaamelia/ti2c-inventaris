<?php include("koneksi.php"); ?>
<!DOCTYPE html> 
<html lang="en">

<html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: aliceblue;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 15px;
            border-radius: 5px 5px 5px 5px;
            margin-bottom: 20px;
        }

        header h2 {
            margin: 0;
        }

        table {
            margin-top: -15px;
            margin-bottom: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: rgb(12, 12, 72);
            color: white;
            text-align: center;
            font-weight: normal;
        }

        table tr:nth-child(even) {
            background-color: aliceblue;
        }

        table tr:hover {
            background-color: white;
        }

        tbody{
            color: midnightblue;
        }

        button {
            background-color: rgb(12, 12, 72);
            border: none;
            padding: 10px;
            font-size: 16px;
            font-family: Georgia, 'Times New Roman', Times, serif;;
            cursor: pointer;
            border-radius: 5px 5px 5px 5px;
        }

        button:hover {
            background-color: navy;
        }
    </style>
</head> 

<body>
    <div class="container">
    <header> 
        <h2>Data Barang</h2> 
    </header> 
    <br> 
    <table border="1">
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Nama Merk</th> 
            <th>Warna</th> 
            <th>Jumlah</th>
            <th>Tindakan</th>
        </tr> 
    </thead> 
    <tbody>
    <?php 
        $sql = "SELECT * FROM printer"; 
        $query = mysqli_query($db, $sql); 
        while($printer = mysqli_fetch_array($query)){ 
            echo "<tr>"; 
            echo "<td>".$printer['nomor']."</td>"; 
            echo "<td>".$printer['nama_merek']."</td>"; 
            echo "<td>".$printer['warna']."</td>"; 
            echo "<td>".$printer['jumlah']."</td>";

            echo "<td>"; 
            echo "<a href='edit.php?nomor=".$printer['nomor']."'>Edit</a> | "; 
            echo "<a href='hapus.php?nomor=".$printer['nomor']."'>Hapus</a>"; 
            echo "</tr>"; 
        } 
        ?>
    </tbody> 
    </table>
    <br>
    <button><a href="index.php" style="color: white; text-decoration: none">Kembali</a></button>
    <button><a href="input_barang.php" style="color: white; text-decoration: none">Tambah Data</a></button>
    </div>
    </body> 
</html>