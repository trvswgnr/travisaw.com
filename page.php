<?php get_header(); ?>
<div class="container resume">
	<?php include 'modules/sidebar.php'; ?>
	<div class="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
			?>
			<h3><?php the_title(); ?></h3>
			<?php
      the_post();
      the_content();
		endwhile;
	else :
	endif;
?>
	</div>
</div>
<?php get_footer(); ?>
