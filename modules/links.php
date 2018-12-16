<?php
$links = get_field('links');
?>
<?php if ($links) : ?>
<div class="links">
	<h3>Links</h3>
	<div class="links-list">
	<?php foreach ($links as $field) : ?>
		<div class="link-item">
			<h4><i class="fa fa-lg fa-<?php echo strtolower($field['name']); ?>" aria-hidden="true"></i></h4>
			<h5><a href="<?php echo $field['url']; ?>"><?php echo $field['name']; ?></a></h5>
		</div>
	<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>
