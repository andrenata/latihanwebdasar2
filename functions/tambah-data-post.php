<?php
        // CONECT TO DATABASE
        include "../koneksi.php";

        // AMBIL VALUE INPUT
        $title = $_POST['title'];
        $status = $_POST['status'];
        $description = $_POST['webeditor'];
        $datenow = date(Y-m-d);

        // AMBIL NAMA PHOTO
        $name = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];

        // UPLOAD PHOTO
        $upload = move_uploaded_file($file, "../images/$name");

        if ($upload) {
                // SIMPAN KE DATABASE
                $query = mysqli_query($koneksi, "INSERT INTO 
                post(post_title, post_description, post_image, post_date, post_status)
                VALUES('$title', '$description', '$name', '$datenow', '$status')");

                if($query) {
                        // JIKA BERHASIL DISIMPAN
                        header("location:../index.php");
                }else{
                        // JIKA GAGAL DISIMPAN
                        echo "Please try again!!!";
                }

        }else{
                // GAGAL UPLOAD PHOTO
                echo "Please try again!!!";     
        }
   

?>