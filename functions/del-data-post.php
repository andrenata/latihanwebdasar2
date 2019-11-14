<?php
        // CONECT TO DATABASE
        include "../koneksi.php";

        // AMBIL VALUE INPUT
        $id = $_GET['id'];


        // DELETE
        $query = mysqli_query($koneksi, "DELETE FROM post WHERE id=$id");

        if($query) {
                // JIKA BERHASIL DISIMPAN
                header("location:../list_post.php");
        }else{
                // JIKA GAGAL DISIMPAN
                echo "Please try again!!!";
        }
   

?>