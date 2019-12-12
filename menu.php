<!-- MENU HERE -->
<div class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="">Place of Interest</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Contat Us</a></li>        
        <?php
            session_start();
            if(isset($_SESSION['status'])){
                if($_SESSION['status']=='login'){
                    echo "<li><a href='list_post.php'>Posts</a></li>
                    <li><a href='list_page.php'>Pages</a></li>
                    <li><a href='list_menu.php'>Menus</a></li>
                    <li><a href='functions/logout.php'>Logout</a></li>";
                }else{
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            }else{
                echo "<li><a href='login.php'>Login</a></li>";
            }
            
        ?>
    </ul>
    <div class="clear"></div>
</div> <!-- endMenu -->