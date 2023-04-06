<?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_futsal';

        function _construct(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_select_db($koneksi, $this->db);

        }
        // koneksi lapangan
        function tampillapangan(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datalapangan = mysqli_query($koneksi, "SELECT * FROM lapangan");
            while ($dl = mysqli_fetch_array($datalapangan)) {
                $hasil[] = $dl;
            }
            return $hasil;
        }
          // koneksi penyewa
        function tampilpenyewa(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datapenyewa = mysqli_query($koneksi, "SELECT * FROM penyewa");
            while ($dp = mysqli_fetch_array($datapenyewa)) {
                $hasil[] = $dp;
            }
            return $hasil;
        }
          // koneksi transaksi
        function tampiltransaksi(){
            $sql = "SELECT transaksi.id_transaksi, lapangan.nama_lapangan, penyewa.nama_penyewa, transaksi.jumlah_jam, transaksi.harga, transaksi.harga_total FROM lapangan INNER JOIN transaksi ON lapangan.id_lapangan = transaksi.id_lapangan INNER JOIN penyewa ON penyewa.id_penyewa = transaksi.id_penyewa";
            
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datatransaksi = mysqli_query($koneksi, $sql);
            while ($dt = mysqli_fetch_array($datatransaksi)) {
                $hasil[] = $dt;
            }
            return $hasil;
        }

        //tambah lapangan
    function tambahlapangan($nama_lapangan, $harga){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        mysqli_query($koneksi, "INSERT INTO lapangan VALUES('','$nama_lapangan', '$harga')");
    }

        //tambah penyewa  
         function tambahpenyewa($nama_penyewa, $alamat_penyewa, $no_telepon){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        mysqli_query($koneksi, "INSERT INTO penyewa VALUES('','$nama_penyewa', '$alamat_penyewa', '$no_telepon' )");
    }
        //tambah transaksi  
         function tambahtransaksi($id_lapangan, $id_penyewa, $jumlah_jam, $harga, $harga_total){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        mysqli_query($koneksi, "INSERT INTO transaksi VALUES('','$id_lapangan', '$id_penyewa', '$jumlah_jam', '$harga', '$harga_total')");
    }

  
    
    }
    

?>