<?php
// variables for heading:
$randomArray = array(
  'sometimes I get bored',
  'white guilt, etc.',
  // 'previously elsewhere',
  'theoretical flim-flam',
  // 'sister shemale',
  // 'John Stamos?',
  // 'spending long at the pumpkin patch',
  // 'Spruce Goose, the band',
  // 'Long Spot',
  // 'Birdwine',
  // 'silky electronic deposit',
  // 'female opens the door',
  'random thing',
  'hetero',
  'a small fire in a duck',
  // 'toothwig supreme',
  'non-personality character',
  'getting ugly',
  // 'skinny in the 80s',
  // 'something food',
  'PHP or whatever',
  'all your base',
  'Math.random()&#59;',
  'white boy',
  // 'all the way to Fountain Valley',
  // 'not allergic to Brazil nuts',
  '<a href="https://www.youtube.com/watch?v=TF9NQ-VlS9c">it&#39;s warm, even</a>',
  // 'pancake princess',
  'jealousy pronoun live',
  '<a href="https://youtu.be/Zumz4v4w-to?t=4m16s">fist behind the mountain</a>',
  'fetish pump',
  'metaphysics LOL',
  'a Democrat walks into a bar...',
  'Republican daydream',
  'democracy LOL'
);

 ?>

<?php get_header(); ?>

<div class="container last-paragraph">

  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center"><?php the_content(); ?></h1>
          <p class="lead text-center text-muted array-text"><?php echo $randomArray[mt_rand(0, count($randomArray)-1)]; ?></p>
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
