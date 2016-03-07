<?php
// variables for heading:
$randomArray = array(
  'sometimes I get bored',
  'something else or whatever',
  'white guilt, etc',
  'previously elsewhere',
  'theoretical flim-flam',
  'not my bread',
  'sister shemale',
  'John Stamos?',
  'spending long at pumpkin patch',
  'Spruce Goose, the band',
  'Long Spot',
  'Birdwine',
  '...or how it appears to you',
  'in world'

);




 ?>

<?php get_header(); ?>

<div class="container last-paragraph">

  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">I'm James</h1>
          <p class="lead text-center text-muted"><?php echo $randomArray[rand(0, count($randomArray)-1)]; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <img src="/wp-content/themes/smear/img/compressed/james_smear_resize.jpg" width="698" height="632" alt="strange image of james" class="img-responsive center-block smear">
        </div>
      </div>

  <?php endwhile; endif; ?>

    </div>

<?php get_footer(); ?>
