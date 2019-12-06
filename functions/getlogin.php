<?php

    // start session
    session_start();
    // panggil koneksi ke database
    include "../koneksi.php";
    // tangkap data yang dikirim dari form
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // cek data ke database
    $cek = mysqli_query($koneksi, "SELECT * FROM user 
                        WHERE email='$email' 
                        AND password='$password'") or die(mysql_error());
                        
    // cek apakah ada data
    $cek = mysqli_num_rows($cek);

    if($cek > 0){
        // $_SESSION['email'] = $email;
        // $_SESSION['status'] = 'login';
        // header('location:../index.php');
        echo "SUKSES";
    }else{
        echo "GAGAL";
        // header('location:../login.php?pesan=gagal');
    }

?>