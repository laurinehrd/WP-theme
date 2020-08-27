<?php get_header(); ?>
<div class="container">

  <h2 class="title-blue soulignage-blue text-center my-5"><?php post_type_archive_title(); ?></h2>

  <main class="site__portfolio">
  	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
      <div class="col-md-3">


      	<div class="card text-white">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-arrondi', 'alt' => '']) ?>
          <div class="card-img-overlay">
            	<h2 class="project__title">
                    <a class="post-suite" href="<?php the_permalink(); ?>">
                    	<?php the_title(); ?>
                    </a>
              </h2>
              <p><?php the_content()?></p>
          </div>
      	</div>
      </div>
      <?php endwhile; endif; ?>
  </main>

</div>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>
