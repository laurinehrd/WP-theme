<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head() ?>
  </head>
  <body>

    <div class="container">
      <nav class="navbar text-uppercase">
        <div class="logo">
          <a href="<?php echo home_url('/'); ?>"><?php echo the_custom_logo()?></a>
        </div>
        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a>
                <?php wp_nav_menu( array (
                'theme_location' => 'header',
                'menu_class' => 'menu_navigation',
              ) ); ?></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
