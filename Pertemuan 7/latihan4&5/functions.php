<?php

$conn = mysqli_connect("localhost","root","","kebunbinatang");

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

      $kodebinatang = htmlspecialchars($data["kodebinatang"]);
      $namabinatang = htmlspecialchars($data["namabinatang"]);
      $negaraasal = htmlspecialchars($data["negaraasal"]);
      $jumlahbinatang = htmlspecialchars($data["jumlahbinatang"]);
      $gambarbinatang = htmlspecialchars($data["gambarbinatang"]);

          //query insert data
    $query = "INSERT INTO binatang
    VALUES
    ('$kodebinatang','$namabinatang','$negaraasal','$jumlahbinatang','$gambarbinatang')
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus($kode_binatang){
  global $conn;
  mysqli_query($conn, "DELETE FROM binatang WHERE kode_hewan= '$kode_binatang'");

  return mysqli_affected_rows($conn);
}

function ubah($data){
  global $conn;
  $kode_binatang = htmlspecialchars($data["kodebinatang"]);
  $nama_binatang = htmlspecialchars($data["namabinatang"]);
  $negaraasal = htmlspecialchars($data["negaraasal"]);
  $jumlah_binatang = htmlspecialchars($data["jumlahbinatang"]);
  $gambar = htmlspecialchars($data["gambar"]);

      //query insert data
        $query = "UPDATE binatang SET 
                    kode_hewan = '$kode_binatang',
                    nama_hewan = '$nama_binatang',
                    negara_asal = $negaraasal,
                    jumlah_hewan = $jumlah_binatang,
                    gambar = '$gambar'

                  WHERE kode_hewan = '$kode_binatang'
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
?>