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

      $kodebarang = htmlspecialchars($data["kodebarang"]);
      $namabarang = htmlspecialchars($data["namabarang"]);
      $hargabarang = htmlspecialchars($data["hargabarang"]);
      $stokbarang = htmlspecialchars($data["stokbarang"]);
      $gambarbarang = htmlspecialchars($data["gambarbarang"]);

          //query insert data
    $query = "INSERT INTO barang
    VALUES
    ('$kodebarang','$namabarang','$hargabarang','$stokbarang','$gambarbarang')
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}
?>