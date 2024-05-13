<!DOCTYPE html>
<html lang="en">

<html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Barang</title>
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 50%;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header{
            text-align: center;
            font-size: 25px;
            background-color: rgb(12, 12, 72);
            color: rgb(199, 218, 234);
            padding: 10px;
            border-radius: 5px 5px 5px 5px;
        }

        h4 {
            text-align: center;
            text-decoration: underline;
            font-size: 23px;
            color: rgb(12, 12, 72);
            margin-top: 20px;
            margin-bottom: -5px;
        }

        h5 { 
            text-align: center;
            font-size: 16px;
            color: midnightblue;
        }

        nav {
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0;
            font-size: 16px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 50px;
            margin-left: 50px;
        }

        nav ul li a {
            color: rgb(12, 12, 72);
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        p {
            font-size: 14px;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
            color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container">
    <header> 
        <h2>SELAMAT DATANG</h2>
    </header>
    <h4>- Menu -</h4>
    <h5>Silahkan klik menu yang diinginkan!<h5>
    <nav> 
        <ul> 
            <li><a href="input_barang.php">- Tambah Barang -</a></li> 
            <li><a href="data_barang.php">- Data Barang -</a></li> 
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p> 
        <?php 
        if($_GET['status'] == 'sukses'){ 
            echo "Barang berhasil ditambahkan!"."<br>".
            "Silahkan klik menu 'Data Barang' untuk melihat barang yang telah ditambahkan pada data!"; 
        } else { 
            echo "Barang belum berhasil ditambahkan!"; 
        } 
        ?> 
    </p> 
    <?php endif; ?>
    </div>
</body>
</html>