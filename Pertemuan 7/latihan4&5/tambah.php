<?php
require 'functions.php';


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah barang</title>
    </head>

    <body>
        <h1>Tambah Barang</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name = "kodebarang" id="kodebarang" required>
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name = "namabarang" id="namabarang" required>
                </li>
                <li>
                    <label for="hargabarang">Harga Barang</label>
                    <input type="text" name = "hargabarang" id="hargabarang" required>
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name = "stokbarang" id="stokbarang" required>
                </li>
                <li>
                    <label for="gambar">Gambar Barang</label>
                    <input type="text" name = "gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>