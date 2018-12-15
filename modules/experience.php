<?php
$jobs = get_field('jobs');
?>
<div class="experience">
	<h3>Experience</h3>
	<?php
	foreach ($jobs as $job) :
	?>
		<div class="row">
			<div class="leftCol">
				<h4><?php echo $job['year']; ?></h4>
			</div>
			<div class="rightCol">
				<h4><?php echo $job['position']; ?></h4>
				<h5><?php echo $job['company']; ?> <span>•</span> <?php echo $job['location']; ?></h5>
				<p><?php echo $job['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<hr/>
