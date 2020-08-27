<?php get_header() ?>

<div class="container">
<!-- <h2 class="text-center text-uppercase my-5"><?php the_title() ?></h2> -->

  <?php
  query_posts('showposts=6&cat='.$cat->cat_ID);

  if (have_posts()) : ?>
      <div class="row row-cols-6 row-cols-md-8 text-center mt-5 mr-0">

      <?php while ( have_posts() ) : the_post();?>

        <div class="col-sm-6 pb-5">
          <div class="card w-75 h-100">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']) ?>
            <div class="card-body post-card">
              <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h5>
              <p class="card-text"><?php the_excerpt() ?></p>
              <a class="post-suite text-uppercase text-center" href="<?php the_permalink() ?>">Continue reading</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

      <?php else : ?>
      <p>Sorry no posts matched your criteria.</p>

      <?php endif; ?>


  </div>
</div>


<?php get_footer() ?>
