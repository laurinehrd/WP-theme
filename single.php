<div class="img-header">

  <style>
    .img-header{
    background-image: url('<?php the_post_thumbnail_url() ?>');
    background-size: cover;
    }
  </style>

<?php get_header() ?>

  <h1 class="title-single-post"><?php the_title() ?></h1>
</div>


  <div class="container my-5">

    <p class="mt-5"><?php the_content() ?></p>

  </div>



















<?php get_footer() ?>
