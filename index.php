<?php include('header.php'); ?>
		
<?php include('menu.php'); ?>


		<div class="content">
			<?php 
				include("koneksi.php");
				$data = mysqli_query($koneksi, "SELECT * FROM post ORDER BY id DESC");
				while($d = mysqli_fetch_array($data)){
			?>
			<article>
				<div class="title">
					<h1><a href="single.php?post=<?php echo $d['id']; ?>"><?php echo $d['post_title']; ?></a></h1>
				</div> <!-- title -->
				<div class="info"><span><?php echo $d['post_date']; ?></span></div>
				<div class="thumbnail">
					<a href="single.php?post=<?php echo $d['id']; ?>"><img src="images/<?php echo $d['post_image']; ?>" alt="Tibumana Wisata Bali"></a>
				</div>
				<?php 
					$num_char = 200;
					$text = $d['post_description'];
					echo substr($text, 0, $num_char);
				?>
				<div class="button-readmore"><a href="single.php?post=<?php echo $d['id']; ?>">read more...</a></div>
				<div class="clear"></div>
			</article>
			<?php } ?>
			
			
		</div> <!-- endContent -->

<?php include('footer.php'); ?>