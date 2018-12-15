<?php
$pic = get_field('pic', 'option');
$name = get_field('name', 'option');
$title = get_field('title');
if (!$title) { $title = get_field('title', 'option'); }
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$address = get_field('address', 'option');

$objective = get_field('objective');
?>

<div class="leftbar">
	<div class="topsec">
		<div class="profilePic"><img src="<?php echo $pic; ?>" alt="Travis Aaron Wagner" /></div>
	</div>
	<div class="bottomsec">
		<div class="name">
			<h1><?php echo $name; ?></h1>
		</div>
		<div class="info">
			<h2><?php echo $title; ?></h2>
		</div>
		<hr/>
		<?php if ($objective) : ?>
		<h3><?php echo $objective['title']; ?></h3>
		<p class="profile"><?php echo $objective['description']; ?></p>
		<hr/>
		<?php endif; ?>
		<h3>Contact</h3>
		<div class="m-row">
			<div class="col-m-6">
				<h4>Phone</h4>
				<p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
				<h4>Email</h4>
				<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
			</div>
			<div class="col-m-6">
<!--
				<h4>GitHub</h4>
				<p>trvswgnr</p>
-->
				<h4>Address</h4>
				<p><?php echo $address['line_1']; ?><br/>
				<?php echo $address['line_2']; ?></p>
			</div>
		</div>
	</div>
</div>
