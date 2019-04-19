<?php

get_header();

while(have_posts()):
	the_post();
?>
	<h1>
		<a href="<?= the_permalink() ?>">
			<?= the_title() ?>
		</a>
	</h1>
	<p><?= the_content() ?></p>
	<hr>
<?php
endwhile;
?>
<a href="<?php echo get_site_url() . '/v1/posts/test' ?>">Custom endpoint</a>
<?php get_footer(); ?>