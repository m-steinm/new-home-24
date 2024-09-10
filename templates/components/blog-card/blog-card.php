<?php
	$title = $post['title'];
	$teaser = $post['teaser'];
	$image = $post['image'];
	$body = $post['body'];
?>


<blog-card>
	<figure>
		<img src="<?=$image?>" alt="">
	</figure>
	<h3 class=" "><?=$title?></h3>
	<p class="calm-voice"><?=$teaser?></p>
	<p class="calm-voice"><?=$body?></p>
</blog-card>