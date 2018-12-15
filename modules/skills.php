<?php
$skills = get_field('skills');
?>
<div class="skills">
	<div class="row">
		<h3>Skills</h3>
		<div class="skills-list">
		<?php
		foreach ($skills as $field) {
			echo "<div class='skill'>" . $field['skill'] . "</div>";
		}
		?>
		</div>
	</div>
</div>
<hr/>
