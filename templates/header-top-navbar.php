<header class="banner navbar navbar-static-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">MENU</a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
  	<div class="banner-top visible-desktop visible-tablet">
  		<h2>Blooming Twig Books is an award-winning independent publisher based in New York, NY and Tulsa, Oklahoma.</h2>
  	</div>
  	<div class="banner-top-mobile hidden-desktop hidden-tablet">
  		<h1><em>Blooming Twig Books</em></h1>
  		<h2>is an award-winning independent publisher based in New York, NY and Tulsa, Oklahoma.</h2>
  	</div>
</header>
