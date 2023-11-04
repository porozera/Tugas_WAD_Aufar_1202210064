<?php
    // Koneksi ke database
    require 'functions.php';
    $brg = query("SELECT * FROM barang");

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
<!-- Latihan 1 Buat tabel barang yang terkoneksi dengan database -->
    <body>
        <h1>Daftar Barang</h1>

        <a href="tambah.php">Tambah data mahasiswa</a>
        <br><br>

        
        <table cellpadding = "10" cellspacing = "0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Aksi</th>
            </tr>

            <?php $i= 1; ?>
            <?php foreach($brg as $row) :?>

            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $row["gambar"]?>" widht = "150" height = "150"></td>
                <td><?= $row["nama_barang"]?></td>
                <td><?= $row["kode_barang"]?></td>
                <td><?= $row["harga_barang"]?></td>
                <td><?= $row["stok_barang"]?></td>
                <td>
                    <a href="ubah.php?kode_barang=<?= $row["kode_barang"]?>">Ubah</a> |
                    <a href="hapus.php?kode_barang=<?= $row["kode_barang"]?>">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach?>

                </td>
            </tr>
        </table>

        
    </body>
</html>