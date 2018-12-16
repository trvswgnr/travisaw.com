<?php get_header(); ?>
<div class="container resume">
	<?php include 'modules/sidebar.php'; ?>
	<div class="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
			?>
			<h3><?php the_title(); ?></h3>
			<hr>
			<div class="rte">
				<?php the_post();
				the_content(); ?>
			</div>
	<?php
		endwhile;
	else :
	endif;
?>
	</div>
</div>
<?php get_footer(); ?>
