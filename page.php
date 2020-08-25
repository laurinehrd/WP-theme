<?php get_header() ?>
<?php

// checks if there are any posts that match the query
if (have_posts()) : ?>
<div class="row text-center pt-5">
  <?php
  // If there are posts matching the query then start the loop
    while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>


          <div class="col-sm-6">
            <div class="card w-75">
              <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']) ?>
              <div class="card-body post-card">
                <p class="card-text"><?php the_category(['class' => 'text-decoration-none']) ?></p>
                <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php the_excerpt() ?></p>
                <a class="post-suite text-uppercase text-center" href="<?php the_permalink() ?>">Continue reading</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>



    <?php

    // Stop the loop when all posts are displayed
 endwhile;
 ?>


  <?php
// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>
<?php get_footer() ?>
