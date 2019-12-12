<?php

    // start session
    session_start();

    // hapus session
    session_destroy();

    // redirect ke halaman depan
    header('location:../index.php');

?>