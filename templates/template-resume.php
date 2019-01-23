<?php /* Template Name: Resume */ ?>

<?php get_header(); ?>
<div class="container resume">
	<?php include 'modules/sidebar.php'; ?>
	<div class="main">
		<?php
		include 'modules/skills.php';
		include 'modules/experience.php';
		include 'modules/soft-skills.php';
		include 'modules/education.php';
		include 'modules/links.php';
		?>
	</div>
</div>
<?php get_footer(); ?>
