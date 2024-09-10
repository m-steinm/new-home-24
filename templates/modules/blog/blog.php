
<!-- // blog module -->
<?php 
	$posts = [
		[
			"title" => "Blog title number one",
			"teaser" => "This is an example of a short sentance that might introduce a blog post",
			"image" => "images/landscape.jpg",
			"body" => "This is where the rest of the blog post would go. It could be really short. Or it could be really long. There isn't really a good way to represenet that here right now",
			"url" => "#",
		],
		[
			"title" => "Blog title number one",
			"teaser" => "This is an example of a short sentance that might introduce a blog post",
			"image" => "images/landscape.jpg",
			"body" => "This is where the rest of the blog post would go. It could be really short. Or it could be really long. There isn't really a good way to represenet that here right now",
			"url" => "#",
		],
		[
			"title" => "Blog title number one",
			"teaser" => "This is an example of a short sentance that might introduce a blog post",
			"image" => "images/landscape.jpg",
			"body" => "This is where the rest of the blog post would go. It could be really short. Or it could be really long. There isn't really a good way to represenet that here right now",
			"url" => "#",
		],
				[
			"title" => "Blog title number one",
			"teaser" => "This is an example of a short sentance that might introduce a blog post",
			"image" => "images/landscape.jpg",
			"body" => "This is where the rest of the blog post would go. It could be really short. Or it could be really long. There isn't really a good way to represenet that here right now",
			"url" => "#",
		],
	]
	?>

 
<!-- //custom element -->
<blog-spotlight>
	<!-- //heading -->
	<h2>Writing</h2>
	<!-- //unordered list -->
		<ul>
			<!-- //function for displaying blog posts pulled from data -->
			<?php foreach ($posts as $post){ ?>
				<li>
				<?php	include('templates/components/blog-card/blog-card.php');
			?>
				</li>
			<?php } ?>
			<!-- //put each blog post in a list item -->
		</ul>
</blog-spotlight>
