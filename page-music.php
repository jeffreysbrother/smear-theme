<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4 center last-paragraph">

          <h1 class="mellow-title"><?php echo the_title(); ?></h1>

          <h5>OP. 1 NO. 1</h5>
          <audio src="/wp-content/themes/smear/audio/Op1_No1.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>ERRONEOUS COMPUTATION</h5>
          <audio src="/wp-content/themes/smear/audio/erroneous_computation.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>PARKWINE</h5>
          <audio src="/wp-content/themes/smear/audio/parkwine.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>VISITING THE MILK CURTAIN</h5>
          <audio src="/wp-content/themes/smear/audio/Milk_Curtain.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>SANDWICH DREAM</h5>
          <audio src="/wp-content/themes/smear/audio/sandwich_dream.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>SOMETHING MINOR</h5>
          <audio src="/wp-content/themes/smear/audio/SOMETHING_MINOR.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>THEORETICAL FLIM-FLAM</h5>
          <audio src="/wp-content/themes/smear/audio/theoretical_flim-flam.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>WHITE GUILT</h5>
          <audio src="/wp-content/themes/smear/audio/white_guilt.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 class="soundcloud">...MORE ON <a href="https://soundcloud.com/jeffreysbrother/tracks">SOUNDCLOUD</a>
          </h5>

    </div>

    <div class="spacer"></div>

  </div>
</div>

<?php get_footer(); ?>

<!-- ONLY PLAY ONE TRACK AT A TIME -->
<script type="text/javascript">
//noconflict wrapper:
  jQuery(document).ready(function($) {
      // the script below allows only one audio track to play at a given time
        $("audio").on("play", function() {
          $("audio").not(this).each(function(index, audio) {
              audio.pause();
          });
        });
  });
</script>
