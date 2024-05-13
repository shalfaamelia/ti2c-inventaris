<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 10px;
            margin: 0;
            border-radius: 5px 5px 0px 0px;
        }

        form {
            width: 50%;
            margin: 0 auto;
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

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: midnightblue;
            color: white;
            font-weight: normal;
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
            background-color: midnightblue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: rgb(12, 12, 72);
        }

        a{
            display: block;
            text-align: center;
            padding: 10px;
            background-color: rgb(12, 12, 72);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        a:hover {
            background-color: navy;
        }
    </style>
</head>
<body>
    <form action="proses_input.php" method="POST">
    <h1>Tambah Data Barang</h1>
        <table>
            <tr>
                <th>No</th>
                <td><input type="text" name="nomor" required></td>
            </tr>
            <tr>
                <th>Nama Merek</th>
                <td><input type="text" name="nama_merek" required></td>
            </tr>
            <tr>
                <th>Warna</th>
                <td><input type="text" name="warna" required></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><input type="number" name="jumlah" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
        <p><a href="input_barang.php">Ulangi</a></p>
        <p><a href="index.php">Kembali</a></p>      
    </form>
</body>
</html>