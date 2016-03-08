<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 center ">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<?php if ( is_front_page() ) { ?>
      		<h1 class="entry-title mellow-title"><?php the_title(); ?></h2>
      	<?php } else { ?>
      		<h1 class="entry-title mellow-title"><?php the_title(); ?></h1>
      	<?php } ?>
      	<?php the_content(); ?>
      <?php endwhile; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
