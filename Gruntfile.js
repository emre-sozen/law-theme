module.exports = function(grunt) {
 
    grunt.initConfig({
      // tasklar bura yazilacak
      uglify: {
        hedef1: {
            options: {
                beautify: true
            },
            files: {
                'js/dosya.min.js': ['js/dosya.js']
            }
        }
    },

    cssmin: {
        hedef1: {
            files: {
                "css/dosya.min.css": ["css/*.css"]
            }
        }
    }

    });




    grunt.loadNpmTasks("grunt-contrib-cssmin");

    grunt.loadNpmTasks("grunt-contrib-uglify");
    

    
   
    // grunt'a npm tasklari yukluyoruz.
    // yukaridaki tasklar loadNpmTasks yapmadan calismaz.
    //grunt.loadNpmTasks('npm-islemi-herbiri-ayri-satira');
    
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // grunt.registerTask('default', ['task1', 'task2']);
    grunt.registerTask('default', ['uglify:hedef1']);
    
  };