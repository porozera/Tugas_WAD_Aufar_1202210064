<?php

require 'functions.php';

$kode_binatang = $_GET["kode_binatang"];

if( hapus($kode_binatang) > 0){
    echo "
            <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php'
            </script>
        ";

} else{
    echo "
            <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php'
            </script>
        ";
}

?>