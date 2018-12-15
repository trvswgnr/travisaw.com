<?php
$schools = get_field('schools');
?>

<div class="education">
	<h3>Education</h3>
	<?php foreach ($schools as $school) : ?>
	<div class="row">
		<div class="rightCol">
			<h4><?php echo $school['name']; ?></h4>
			<h5><?php echo $school['degree']; ?> <span>•</span> <?php echo $school['location']; ?></h5>
		</div>
		<div class="rightCol2">
			<div class="schoolLogo"><img src="<?php echo $school['logo']; ?>" alt="<?php echo $school['name']; ?> Logo" /></div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<hr />
