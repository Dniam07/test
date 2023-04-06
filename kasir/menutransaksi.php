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
            <h2 style="text-align: center; margin-bottom: 20px"></h2>
            <a href="tambahtransaksi.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Lapangan</a>
            <table border="1" cellspacing="0" cellpadding="8 border="1" width="100%" style="text-align : center; font-size: 15px; margin-bottom: 20px;">
            <tr>
        <th>NO</th>
        <th>Nama Lapangan</th>
        <th>Nama Penyewa</th>
        <th>Jumlah Jam</th>
        <th>Harga</th>
        <th>Harga Total</th>
       </tr>
       <?php
        $no=1;
          foreach ($dbfutsal-> tampiltransaksi() as $x) {
       
       ?>
       <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $x ['nama_lapangan'];?></td>
          <td><?php echo $x ['nama_penyewa'];?></td>
          <td><?php echo $x ['jumlah_jam'];?></td>
          <td><?php echo $x ['harga'];?></td>
          <td><?php echo $x ['harga_total'];?></td>
         
       </tr>

       <?php
          }
       ?>
       </table>
        </div>
    </center>
   

    
</body>
</html>