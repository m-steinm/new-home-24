<?php
	$projects = [
		[
			"title" => "Project Title one",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],
		[
			"title" => "Project Title two",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],
		[
			"title" => "Project Title three",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],		
];
?>
<project-spotlight>

	<h2 class="attention-voice">My Projects</h2>

	<ul class="project-list">
		<?php foreach ($projects as $project) { ?>
		<li class="project">
			<?php
			include('templates/components/project-card/project-card.php');
			?>
		</li>
		<?php } ?>
	</ul>
</project-spotlight>