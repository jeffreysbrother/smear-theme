//noconflict wrapper:
  jQuery(document).ready(function($) {

      // the script below allows only one audio track to play at a given time
        // $("audio").on("play", function() {
        //   $("audio").not(this).each(function(index, audio) {
        //       audio.pause();
        //   });
        // });

        $('audio').click(function() {
          if (this.paused == false) {
              this.pause();
              alert('music paused');
          } else {
              this.play();
              alert('music playing');
          }
        });

  });
