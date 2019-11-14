<?php include('header.php'); ?>
<?php include('menu.php'); ?>

    <div class="content">
        <h4>ADD PAGE</h4>
        <form method="post" action="functions/tambah-data-page.php" enctype="multipart/form-data">
            <div class="input-group">
                <label>Title</label> <br>
                <input type="text" name="title">
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
        <h4>LIST PAGES</h4>
        <table class="list-data">
            <tr>
                <td>Title</td>
                
                <td>Status</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
            <?php 
                include("koneksi.php");
                $data = mysqli_query($koneksi, "SELECT * FROM page ORDER BY id DESC");
                while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['page_title']; ?></td>
                <td><?php 
                    if($d['page_status']==1){
                        echo "Publish";
                    }else{
                        echo "Draft";
                    }
                    ?></td>
                <td>
                    <?php 
                    $num_char = 200;
                    $text = $d['page_description'];
                    echo substr($text, 0, $num_char);
                ?>
                </td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Del</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div> <!-- endContent -->

<?php include('footer.php'); ?>