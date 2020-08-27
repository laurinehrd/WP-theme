<div class="container-fluid section-footer">
  <div class="container">


          <div class="text-center text-uppercase my-4 pt-5">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a>
                  <?php wp_nav_menu( array (
                  'theme_location' => 'footer',
                  'menu_class' => 'menu_navigation',
                ) ); ?></a>
              </li>
            </ul>
          </div>

          <p class="p-footer text-center mb-1">2020, <?php echo bloginfo('name'); ?>, All rights reserved.</p>



  </div>

</div>




<?php wp_footer() ?>

  </body>
</html>
