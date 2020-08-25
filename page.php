<?php get_header() ?>
<?php if (have_posts()) : ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php

        while ( have_posts() ) : the_post();
?>
  <div class="col">
    <div class="card">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']) ?>
      <div class="card-body">
        <p class="card-text"><?php the_category(['class' => 'text-decoration-none']) ?></p>
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

      </div>





    <?php
 endwhile;

else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>
<?php get_footer() ?>
