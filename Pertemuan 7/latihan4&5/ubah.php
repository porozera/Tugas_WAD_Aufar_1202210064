<?php
require 'functions.php';

//ambil data di url

$kode_binatang= $_GET["kode_binatang"];

// query data mahasiswa berdasarkan id
$barang = query("SELECT * FROM binatang WHERE kode_hewan = '$kode_bintang'")[0];


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
        <title>Ubah Data Binatang</title>
    </head>

    <body>
        <h1>Ubah Data Binatang</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebarang">Kode binatang</label>
                    <input type="text" name = "kodebinatang" id="kodebinatang" required value="<?= $binatang['kode_hewan']?>">
                </li>
                <li>
                    <label for="namabinatang">Nama binatang</label>
                    <input type="text" name = "namabinatang" id="namabinatang" required value="<?= $binatang['nama_hewan']?>">
                </li>
                <li>
                    <label for="negaraasal">Negara Asal</label>
                    <input type="text" name = "negaraasal" id="negaraasal" required value="<?= $binatang['negara_asal']?>">
                </li>
                <li>
                    <label for="jumlahbinatang">Jumlah binatang</label>
                    <input type="text" name = "jumlahbinatang" id="jumlahbinatang" required value="<?= $binatang['jumlah_hewan']?>">
                </li>
                <li>
                    <label for="gambar">Gambar binatang</label>
                    <input type="text" name = "gambar" id="gambar" value="<?= $binatang['gambar' ]?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>