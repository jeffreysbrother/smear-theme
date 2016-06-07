module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'style.css' : 'sass/main.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
      }
    }
    // cssmin: {
    //   target: {
    //     files: [{
    //     expand: true,
    //     cwd: '/',
    //     src: 'tmp/style.css',
    //     dest: 'style.css'
    //   }]
    //   }
    // }

  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['watch', 'sass']);

};
