<?php

    // start session
    session_start();
    // panggil koneksi ke database
    include "../koneksi.php";
    // tangkap data yang dikirim dari form
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // cek data ke database
    $cek = mysqli_query($koneksi, "select * from user 
                        where email='$email' 
                        and password='$password'");
    // cek apakah ada data
    if($cek){
        // $_SESSION['email'] = $email;
        // $_SESSION['status'] = 'login';
        // header('location:../index.php');
        echo "sukses";
    }else{
        echo "gagal";
        // header('location:../login.php?pesan=gagal');
    }

?>