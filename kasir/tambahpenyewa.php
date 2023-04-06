<?php
    include 'koneksi.php';
    $dbfutsal = new database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
        <div class="head">
             <h1>FUTSAL JAYA</h1>
        </div>

        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menulapangan.php">Nama Lapangan</a></li>
                <li><a href="menupenyewa.php">Menu Penyewa</a></li>
                <li><a href="menutransaksi.php">Data Pesanan</a></li>
                <li><a href="../index.php">Logout</a></li>
            </ul>
        </div>
      <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px">TAMBAH MENU PENYEWA</h2>
        
          
        <table style="padding-center: 720px;">

               <form action="proses.php?aksi=tambahpenyewa" method="post">
                <tr>
                    <td>NAMA PENYEWA :</td>
                    <td><input type="text" name="nama_penyewa" ></td>
                </tr>
                <tr>
                    <td>ALAMAT PENYEWA :</td>
                    <td><input type="text" name="alamat_penyewa" ></td>
                </tr>
                <tr>
                    <td>NO TELEPON :</td>
                    <td><input type="text" name="no_telepon" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" ></td>
                </tr>
            </form>
    
        </table>
        </div>
    </center>
   

    
</body>
</html>