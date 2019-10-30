<?php include('header.php'); ?>
		
<?php include('menu.php'); ?>


		<div class="content">
			<?php
				include ("koneksi.php");
				$id = $_GET['post'];
				$data = mysqli_query($koneksi, "SELECT * FROM post WHERE id=$id");
				while($d = mysqli_fetch_array($data)){
			?>
			<article>
				<div class="title">
					<h1><a href="#"><?php echo $d['post_title']; ?></a></h1>
				</div> <!-- title -->
				<div class="info"><span>17 August 2019</span></div>
				<div class="thumbnail">
					<img src="images/<?php echo $d['post_image']; ?>" alt="Tibumana Wisata Bali">
				</div>
				<?php echo $d['post_description']; ?>
				<div class="clear"></div>
			</article>
			<?php } ?>
			
		</div> <!-- endContent -->

		<?php include('footer.php'); ?>















