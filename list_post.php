<?php include('header.php'); ?>
<?php include('menu.php'); ?>

    <div class="content">
        <h4>ADD POST</h4>
        <form method="post" action="functions/tambah-data-post.php" enctype="multipart/form-data">
            <div class="input-group">
                <label>Title</label> <br>
                <input type="text" name="title">
            </div>
            <div class="input-group">
                <label>Image</label> <br>
                <input type="file" name="image">
            </div>
            <div class="input-group">
                <label>Status</label> <br>
                <select name="status">
                    <option value="0">Draft</option>
                    <option value="1">Publish</option>
                </select>
            </div>
            <div class="input-group">
                <label>Description</label> <br>
                <textarea name="webeditor" cols="30" rows="5"></textarea>
            </div>
            <div class="input-group">
                <input type="submit" value="SAVE">
            </div>
        </form>
        <hr>
        <h4>LIST POST</h4>
        <table class="list-data">
            <tr>
                <td>Title</td>
                <td>Date</td>
                <td>Status</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
            <?php 
                // KONEKSI KE DATABASE
                include("koneksi.php"); 
                // AMBIL DATA DARI DATABASE
                $data = mysqli_query($koneksi, "SELECT * FROM post ORDER BY id DESC");
                // LAKUKAN PERULANGAN DATA DENGAN WHILE
                while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['post_title']; ?></td>
                <td><?php echo $d['post_date']; ?></td>
                <td><?php 
                    if($d['post_status']==1){
                        echo "Publish";
                    }else{
                        echo "Draft";
                    }
                    ?></td>
                <td>
                    <?php 
                    $num_char = 200;
                    $text = $d['post_description'];
                    echo substr($text, 0, $num_char);
                ?>
                </td>
                <td>
                    <a href="edit_post.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a href="functions/del-data-post.php?id=<?php echo $d['id']; ?>">Del</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div> <!-- endContent -->

<?php include('footer.php'); ?>