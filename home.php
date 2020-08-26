<?php get_header('home') ?>

<div class="container">
    <div class="row">
      <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <div class="card" style="width: 18rem;">
              <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                <div class="card-body">
                  <h5 class="card-title"><?php the_title() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                    <p class="card-text">
                      <?php the_excerpt() ?>
                    </p>
                    <a href="<?php the_permalink() ?>" class="card-link">Lire la suite</a>
                    <br><br><p>Publié le <?php the_time('d/m/Y'); ?><?php if(!is_page()) : ?><?php endif; ?></p>
                    <p>By <?php the_author() ?></p>
                </div>
            </div>
          <?php endwhile ?>

      <?php else : ?>
          <h2>pas d'article</h2>
      <?php endif; ?>
    </div>
  </div>

<?php get_footer() ?>
