<?php
        // CONECT TO DATABASE
        include "../koneksi.php";

        // AMBIL VALUE INPUT
        $title = $_POST['title'];
        $status = $_POST['status'];
        $description = $_POST['webeditor'];
        

        // SIMPAN KE DATABASE
        $query = mysqli_query($koneksi, "INSERT INTO 
        page(page_title, page_description, page_status)
        VALUES('$title', '$description', '$status')");

        if($query) {
                // JIKA BERHASIL DISIMPAN
                header("location:../list_page.php");
        }else{
                // JIKA GAGAL DISIMPAN
                echo "Please try again!!!";
        }

        
   

?>