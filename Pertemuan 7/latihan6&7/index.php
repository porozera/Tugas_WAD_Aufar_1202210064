<?php
    // Koneksi ke database
    require 'functions.php';
    $brg = query("SELECT * FROM binatang");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas WAD Minggu 7</title>
        <style>
        table, th, td {
             border: 3px solid black;
             border-collapse : collapse;
            }
        th,td{
            text-align: center
        }
        </style>
    </head>
<!-- Latihan 1 Buat tabel binatang yang terkoneksi dengan database -->
    <body>
        <h1>Daftar binatang</h1>

        <a href="tambah.php">Tambah data Binatang</a>
        <br><br>

        
        <table cellpadding = "10" cellspacing = "0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Binatang</th>
                <th>Kode Binatang</th>
                <th>Negara Asal</th>
                <th>Jumlah Binatang</th>
                <th>Aksi</th>
            </tr>

            <?php $i= 1; ?>
            <?php foreach($brg as $row) :?>

            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $row["gambar"]?>" widht = "150" height = "150"></td>
                <td><?= $row["nama_hewan"]?></td>
                <td><?= $row["kode_hewan"]?></td>
                <td><?= $row["negara_asal"]?></td>
                <td><?= $row["jumlah_hewan"]?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="hapus.php?kode_binatang=<?= $row["kode_hewan"]?>">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach?>

                </td>
            </tr>
        </table>

        
    </body>
</html>