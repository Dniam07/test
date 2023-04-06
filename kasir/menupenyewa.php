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
      
        <div class="box"">
            <h2 style="margin-bottom: 20px"></h2>
            <a href="tambahpenyewa.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah penyewa</a>
            <table border="1" cellspacing="0" cellpadding="8 border="1" width="100%" style=" font-size: 15px; margin-bottom: 20px;">
            <tr>
        <th>NO</th>
        <th>Nama Penyewa</th>
        <th>Alamat</th>
        <th>No Telepon</th>
       </tr>
       <?php
        $no=1;
          foreach ($dbfutsal-> tampilpenyewa() as $x) {
       
       ?>
       <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $x ['nama_penyewa'];?></td>
          <td><?php echo $x ['alamat_penyewa'];?></td>
          <td><?php echo $x ['no_telepon'];?></td>
       </tr>

       <?php
          }
       ?>
       </table>
        </div>
    
   

    
</body>
</html>