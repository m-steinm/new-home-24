
<?php include('header.php'); ?>

<section>
	<inner-column>
		<?php include('templates/modules/page-header/page-header.php'); ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php include('templates/modules/project-spotlight/project-spotlight.php'); ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php 
			$heading = "Example heading for a graphic"
		?>
		<?php include('templates/modules/graphic-diptych/graphic-diptych.php'); ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php include('templates/modules/blog/blog.php'); ?>
	</inner-column>
</section>




<?php include('footer.php'); ?>