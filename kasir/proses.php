<?php
    include 'koneksi.php';
    $dbfutsal= new database();

    $aksi = $_GET['aksi'];

   if ($aksi == "tambahlapangan"){
    $dbfutsal->tambahlapangan($_POST['nama_lapangan'], $_POST['harga']);
    header("location:menulapangan.php");
}

    if ($aksi == "tambahpenyewa"){
    $dbfutsal->tambahpenyewa($_POST['nama_penyewa'], $_POST['alamat_penyewa'], $_POST['no_telepon']);
    header("location:menupenyewa.php");
    }

   //tambah transaksi
   if ($aksi == "tambahtransaksi") {
    $id_lapangan = $_POST["id_lapangan"];
    $query = mysqli_query(mysqli_connect("localhost", "root", "", "db_futsal"), "SELECT harga FROM lapangan WHERE id_lapangan = '$id_lapangan'");

    while ($row = mysqli_fetch_array($query)) {
        $harga_total = $row["harga"]*$_POST["jumlah_jam"];
        $dbfutsal -> tambahtransaksi($_POST["id_lapangan"], $_POST["id_penyewa"], $_POST["jumlah_jam"], $row["harga"], $harga_total);
        header("location: menutransaksi.php");    
    

   }
   
   }
    
?>