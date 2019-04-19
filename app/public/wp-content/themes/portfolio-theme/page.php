<?php

get_header();

while(have_posts()):
	the_post();
?>
	<h1>
		<a href="<?= home_url() ?>">
			<?= the_title() ?>
		</a>
	</h1>
	<p><?= the_content() ?></p>
	<hr>
<?php
endwhile;
?>

<?php get_footer(); ?>