<?php
        // CONECT TO DATABASE
        include "../koneksi.php";

        // AMBIL VALUE INPUT
        $id = $_POST['id'];
        $title = $_POST['title'];
        $status = $_POST['status'];
        $description = $_POST['webeditor'];
        $datenow = date('Y-m-d');

        // AMBIL NAMA PHOTO
        $name = $_FILES['image']['name'];
        

        if ($name) {
                $file = $_FILES['image']['tmp_name'];
                // UPLOAD PHOTO
                $upload = move_uploaded_file($file, "../images/$name");
        }

        

        if ($upload) {
                // SIMPAN KE DATABASE
                $query = mysqli_query($koneksi, "UPDATE post SET 
                post_title='$title', post_description='$description', 
                post_image='$name', post_date='$datenow', post_status='$status' 
                WHERE id=$id");

                if($query) {
                        // JIKA BERHASIL DISIMPAN
                        header("location:../list_post.php");
                }else{
                        // JIKA GAGAL DISIMPAN
                        echo "Please try again!!!";
                }

        }else{
                // SIMPAN KE DATABASE
                $query = mysqli_query($koneksi, "UPDATE post SET 
                post_title='$title', post_description='$description', 
                post_date='$datenow', post_status='$status' 
                WHERE id=$id");

                if($query) {
                        // JIKA BERHASIL DISIMPAN
                        header("location:../list_post.php");
                }else{
                        // JIKA GAGAL DISIMPAN
                        echo "Please try again!!!";
                }     
        }
   

?>