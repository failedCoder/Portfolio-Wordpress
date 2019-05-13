<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
  <?php 
  $n_page = wp_count_posts('page');
  $n_page_publish = $n_page->publish;
  // hide menu btn if there are no pages
  if((int) $n_page_publish == 0): 
  ?>
      <style type="text/css">
        #responsive-menu-button {
          display: none !important;
        }
      </style>
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>

<!-- <ul class="float-right mr-3 mt-3">
  	<?php /*pll_the_languages([
  		'dropdown'=> 0,
  		'show_flags' => 1,
  		'show_names' => 0,
  		'hide_if_empty' => 0,
  	]);*/?>	
  </ul> -->

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url(); ?>">
    <img src="<?= get_template_directory_uri() . '/assets/img/logo.png' ?>" width="100" height="100" alt="Logo">
  </a>

  <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

  
</nav>
