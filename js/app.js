//noconflict wrapper:
  jQuery(document).ready(function($) {
      // the script below allows only one audio track to play at a given time
        $("audio").on("play", function() {
          $("audio").not(this).each(function(index, audio) {
              audio.pause();
          });
        });
  });
