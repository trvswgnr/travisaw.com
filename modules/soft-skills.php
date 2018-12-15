<?php
$soft_skills = get_field('soft_skills');
?>
<div class="softskills">
	<h3>Soft Skills</h3>
	<ul class="chips">
	<?php
	foreach ($soft_skills as $field) {
		echo "<li>" . $field['soft_skill'] . "</li>\n";
	}
	?>
	</ul>
</div>
<hr/>
