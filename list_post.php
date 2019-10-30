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
            <tr>
                <td>Example Title</td>
                <td>20 November 2019</td>
                <td>Publish</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit...</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Del</a>
                </td>
            </tr>
            <tr>
                <td>Example Title</td>
                <td>20 November 2019</td>
                <td>Publish</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit...</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Del</a>
                </td>
            </tr>
        </table>
    </div> <!-- endContent -->

<?php include('footer.php'); ?>