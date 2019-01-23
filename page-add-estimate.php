<?php
/**
	* Add Event
	*/
acf_form_head();

get_header();
?>
<style>
	.acf-field--post-content {
		display: none;
	}
	input[type="submit"] {
		border: none;
		background: #3b99fc;
		color: white;
		height: 56px;
		font-size: 1em;
		text-transform: uppercase;
		padding: 0 2em;
	}
	.s-add-event h1 {
		padding: 1em 0 0.3em;
		font-size: 3em
	}
	.acf-fields>.acf-field {
		padding-left: 0;
		padding-right: 0;
	}
</style>
<div id="content" class="container content s-add-event">
	<h1>Create New Estimate</h1>
	<?php

	acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
		'new_post'		=> array(
			'post_type'		=> 'estimate',
			'post_status'	=> 'publish'
		),
		'submit_value'		=> 'Create a new event'
	));

	?>

</div>

<?php get_footer(); ?>


