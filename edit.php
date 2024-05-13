<!DOCTYPE html>
<html>
<head>
	<title>Edit Data barang</title>
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 10px;
            margin: 0;
            border-radius: 5px 5px 0px 0px;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: aliceblue;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: navy;
        }
    </style>
</head>
<body>
	<?php
    include 'koneksi.php';
    $no = $_GET ['nomor'];
    $query = mysqli_query($db, "select * from printer where nomor='$no'");
    $data = mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php" method="POST">
        <table>
        <h2>Edit Data Barang</h2>
            <tr>
                <td>No</td>
                <td><input type="text" name="nomor" value="<?php echo $data['nomor'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Merek</td>
                <td><input type="text" name="nama_merek" value="<?php echo $data['nama_merek'] ?>"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><input type="text" name="warna" value="<?php echo $data['warna'] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
            </tr>
        </table>
        <td><input type="submit" name="simpan" value="Simpan"></td>
    </form>
</body>
</html>