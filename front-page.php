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

    <div class="row pt-4 d-flex justify-content-between">
      <div class="col-lg-4">
        <div class="card text-center py-4 ml-0">
          <img src="<?php echo get_template_directory_uri(); ?> /images/beach.png" class="card-img-top w-25 mx-auto" alt="icone beach">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center py-4">
          <img src="<?php echo get_template_directory_uri(); ?> /images/iceberg.png" class="card-img-top w-25 mx-auto" alt="icone iceberg">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center py-4 mr-0">
          <img src="<?php echo get_template_directory_uri(); ?> /images/nature.png" class="card-img-top w-25 mx-auto" alt="icone nature">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>




<!-- SECTION POST -->

<section class="section-posts">

  <div class="container">

    <h2 class="title-h2 title-posts text-center soulignage-blue">Posts</h2>
<?php
query_posts('showposts=2&cat='.$cat->cat_ID);
// checks if there are any posts that match the query
if (have_posts()) : ?>
    <div class="row row-cols-6 row-cols-md-8 text-center mt-5">
      <?php
      // If there are posts matching the query then start the loop
        while ( have_posts() ) : the_post();

        // the code between the while loop will be repeated for each post
        ?>

      <div class="col-sm-6 pb-5">
        <div class="card w-75 h-100">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']) ?>
          <div class="card-body post-card">
            <!-- <p class="card-text"><?php the_category(['class' => 'text-decoration-none']) ?></p> -->
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
