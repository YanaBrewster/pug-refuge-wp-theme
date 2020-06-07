module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
       dist: {
         options: {
           style: 'expanded'
         },
         files: {
           'css/main.css': 'sass/main.scss'

         }
       }
     },
    watch: {
      files: ['Gruntfile.js', 'sass/main.scss','css/main.css'],
      tasks: ['sass']
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');


  grunt.registerTask('default', ['sass']);

};
