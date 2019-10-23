<?php
    // koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'wisatabali');

    // cek apakah ada error setelah koneksi
    if(mysqli_connect_errno()){
        // jika ya ada error
        echo 'Koneksi Gagal : '.mysqli_connect_error();
    }else{
        // jika tidak ada error
        echo 'Konesi sukses!!!';
    }

?>