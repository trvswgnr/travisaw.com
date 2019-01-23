<?php /* Template Name: Resume */ ?>

<?php get_header(); ?>
<div class="container resume">
	<?php include module('sidebar'); ?>
	<div class="main">
		<?php
		include module('skills');
		include module('experience');
		include module('soft-skills');
		include module('education');
		include module('links');
		?>
	</div>
</div>
<?php get_footer(); ?>
