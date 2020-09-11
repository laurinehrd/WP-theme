<?php get_header('home') ?>


  <h1 class="text-uppercase title-header"><?php echo bloginfo('name'); ?></h1>
  <h2 class="slogan "><?php echo bloginfo('description'); ?></h2>

  <div class="buttons">
    <a class="btn btn-primary" href="<?= get_post_type_archive_link('post') ?>" role="button">See posts</a>
    <a class="btn btn-primary" href="#infos" role="button">Infos</a>
  </div>



<!-- SECTION INFOS -->
<section class="section-info" id="infos">

  <div class="container">

    <div class="row pb-3">
      <div class="col-lg-12">
        <h2 class="title-h2 soulignage">Informations</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <p class="info-p text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</p>
      </div>
    </div>

    <div class="row row-cols-4 pt-4 mx-0 w-100">

    <?php
    query_posts(array(
    'post_type' => 'information',
    'showposts' => 3
    ) );
    ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="col-lg-4 col-sm-12 px-5">
        <div class="card text-center py-4 ml-0 h-100">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'mx-auto img-infos', 'alt' => '']); ?>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>
      </div>

    <?php endwhile; ?>

    </div>

  </div>

</section>




<!-- SECTION POST -->

<section class="section-posts">

  <div class="container">

    <h2 class="title-h2 title-blue text-center soulignage-blue">Posts</h2>
<?php
query_posts('showposts=2&cat='.$cat->cat_ID);

if (have_posts()) : ?>
    <div class="row row-cols-6 row-cols-md-8 text-center mt-5">
      <?php
        while ( have_posts() ) : the_post();
        ?>

      <div class="col-sm-6 pb-5">
        <div class="card w-75 h-100">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']) ?>
          <div class="card-body post-card">
            <p class="card-text category"><?php the_category(['class' => 'name-category text-decoration-none']) ?></p>
            <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_excerpt() ?></p>
            <a class="post-suite text-uppercase text-center" href="<?php the_permalink() ?>">Continue reading</a>
          </div>
        </div>
      </div>

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

    </div>

    <span class="button py-5 mx-auto w-50"><a class="btn btn-primary btn-lg text-uppercase px-5" href="<?= get_post_type_archive_link('post') ?>" role="button">See all posts</a></span>

  </div>
</section>




<?php get_footer() ?>
