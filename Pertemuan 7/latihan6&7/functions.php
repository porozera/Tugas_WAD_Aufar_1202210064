<?php

$conn = mysqli_connect("localhost","root","","toko_barang");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
  }

function tambah($data){
      global $conn;

      $kode_barang = htmlspecialchars($data["kodebarang"]);
      $nama_barang = htmlspecialchars($data["namabarang"]);
      $harga_barang = htmlspecialchars($data["hargabarang"]);
      $stok_barang = htmlspecialchars($data["stokbarang"]);
      $gambar = htmlspecialchars($data["gambar"]);

          //query insert data
    $query = "INSERT INTO barang
    VALUES
    ('$kode_barang','$nama_barang','$harga_barang','$stok_barang','$gambar')
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus($kode_barang){
  global $conn;
  mysqli_query($conn, "DELETE FROM barang WHERE kode_barang = '$kode_barang'");

  return mysqli_affected_rows($conn);
}
?>