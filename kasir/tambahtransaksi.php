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
            <h2 >TAMBAH MENU TRANSAKSI</h2>
        
              <form action="proses.php?aksi=tambahtransaksi" method="POST" >
                <tr>
                    <td>Nama Penyewa :</td>
                </tr>
                <select name="id_penyewa" id="nama_penyewa">
                    <option disable selected>Pilih Nama Penyewa</option>
                    <?php foreach($dbfutsal -> tampilpenyewa() as $option) : ?>
                        <option value="<?php echo $option['id_penyewa'] ?>"><?php echo $option['nama_penyewa'] . ' - ' . $option['alamat_penyewa'] . ' - ' . $option['no_telepon'] ?> </option>
                    <?php endforeach ?>
                </select><br><br>

                <tr>
                    <td>Nama Lapangan :</td>
                </tr>
                <select name="id_lapangan" id="nama_lapangan">
                    <option disable selected>Pilih Nama Lapangan</option>
                    <?php foreach($dbfutsal -> tampillapangan() as $option) : ?>
                        <option value="<?php echo $option['id_lapangan'] ?>"><?php echo $option['nama_lapangan'] . ' ' .' - Rp ' . $option['harga'] ?> </option>
                    <?php endforeach ?>

                </select><br><br>
               
                <tr>
                    <td>JUMLAH JAM :</td>
                    <td><input type="number" name="jumlah_jam" "></td>
                </tr><br>
               
                <tr>
                    <td></td>
                    <td><input type="submit" name="Simpan"></td>
                </tr>
            </form>
        </center>
</body>
</html>

