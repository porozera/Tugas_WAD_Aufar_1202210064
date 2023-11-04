<?php
require 'functions.php';

//ambil data di url

$kode_barang = $_GET["kode_barang"];

// query data mahasiswa berdasarkan id
$barang = query("SELECT * FROM barang WHERE kode_barang = '$kode_barang'")[0];


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ubah Data barang</title>
    </head>

    <body>
        <h1>Ubah Data Barang</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name = "kodebarang" id="kodebarang" required value="<?= $barang['kode_barang']?>">
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name = "namabarang" id="namabarang" required value="<?= $barang['nama_barang']?>">
                </li>
                <li>
                    <label for="hargabarang">Harga Barang</label>
                    <input type="text" name = "hargabarang" id="hargabarang" required value="<?= $barang['harga_barang']?>">
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name = "stokbarang" id="stokbarang" required value="<?= $barang['stok_barang']?>">
                </li>
                <li>
                    <label for="gambar">Gambar Barang</label>
                    <input type="text" name = "gambar" id="gambar" value="<?= $barang['gambar' ]?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>