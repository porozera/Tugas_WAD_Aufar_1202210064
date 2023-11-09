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
?>