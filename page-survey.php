<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="lg-col-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, there is nothing here.' ); ?></p>
      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
