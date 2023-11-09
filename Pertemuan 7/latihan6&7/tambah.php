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
        <title>Tambah binatang</title>
    </head>

    <body>
        <h1>Tambah binatang</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebinatang">Kode binatang</label>
                    <input type="text" name = "kodebinatang" id="kodebinatang" required>
                </li>
                <li>
                    <label for="namabinatang">Nama binatang</label>
                    <input type="text" name = "namabinatang" id="namabinatang" required>
                </li>
                <li>
                    <label for="negaraasal">Negara asal</label>
                    <input type="text" name = "negaraasal" id="negaraasal" required>
                </li>
                <li>
                    <label for="jumlahbinatang">jumlah binatang</label>
                    <input type="text" name = "jumlahbinatang" id="jumlahbinatang" required>
                </li>
                <li>
                    <label for="gambarbinatang">Gambar binatang</label>
                    <input type="text" name = "gambarbinatang" id="gambarbinatang">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>