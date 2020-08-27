<?php get_header('single') ?>

  <h1 class="title-single-post"><?php the_title() ?></h1>


  <div class="container my-5">

    <div class="row">
      <div class="col-lg-9">
        <p class="mt-5"><?php the_content() ?></p>
      </div>

      <div class="col-lg-3 d-flex justify-content-end">

        <aside class="sidebar-single site__sidebar w-75 p-4 text-center">
          <ul class="pl-0">
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
          </ul>
        </aside>

      </div>
    </div>




  </div>





<?php get_footer() ?>
