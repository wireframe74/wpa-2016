'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Watch for changes and trigger compass, jshint, uglify and livereload
    watch: {
      compass: {
        files: ['sass/*.{scss,sass}'],
        tasks: ['compass:dev']
      },
      js: {
        files: ['js/*.js'],
        tasks: ['jshint', 'uglify:dev']
      },
      livereload: {
        options: {
          livereload: true
        },

        css: {
		    files: ['sass/*.scss'],
		    tasks: ['sass'],
		    options: {
		        spawn: false,
		    }
		 },


        files: [
          '*.html',
          'css/style.css',
          'js/*.js',
          'images/{,**/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

 exec: {
          get_grunt_sitemap: {
            command: 'curl --silent --output sitemap.json http://localhost/arab-emirates/?show_sitemap'
          }
        },
    
     uncss: {
      dist: {

        options: {
              ignore       : ['.hidden-xs','.show-nav', '#body-nav', '.clear-menu-btn'],
              // stylesheets  : ['style.css','css/*.css'],
              ignoreSheets : [/fonts.googleapis/],
              compress: true
           
            },

        files: {
          'css/combined.css': ['1-index.html', '1-about.html', '1-course-detail.html', '1-course-listing.html']
        }
      }
    },


cssmin: {
  target: {
    files: [{
      expand: false,
     
      src: ['css/combined.css'],
      dest: 'css/combined.min.css',

    }]
  }
},


    // Connect
    connect: {
      server: {
        options: {
          port: 8000
        }
      }
    },

    // Compass and scss
    compass: {
      options: {
        //bundleExec: true,
        httpPath: './',
        cssDir: '/css',
        sassDir: 'sass',
        imagesDir: 'images',
        javascriptsDir: 'js',
        fontsDir: 'fonts',
        config: 'config.rb',
        sourcemap: true

        // require: [
        //   'sass-globbing'
        // ]
      },
      dev: {
        options: {
          environment: 'development',
          outputStyle: 'expanded',
          // relativeAssets: true,
          // raw: 'line_numbers = :true\n'
        }
      },
      dist: {
        options: {
          environment: 'production',
          outputStyle: 'compact',
          force: true
        }
      }
    },
 
    // Javascript linting with jshint
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'js/src/*.js'
      ]
    },

 iconizr: {
            options: {
                dims: true,
                common: "svg-icon",
                keep      : false,
                preview   : 'preview',
                padding: 1,
                render    : {
                    css     : false,
                    scss    : '../sass'
                }
            },
            your_target: {
                src      : 'svg',
                dest     : 'images/svg'
            }
        },



    // Concat & minify
    uglify: {
      dev: {
        options: {
          mangle: false,
          compress: false,
          preserveComments: 'all',
          beautify: true
        },
        files: {
          'js/app.min.js': [
            'js/*.js'
          ]
        }
      },
      dist: {
        options: {
          mangle: true,
          compress: true
        },
        files: {
          'js/app.min.js': [
            'js/*.js'
          ]
        }
      }
    },

  });

// grunt.loadNpmTasks('grunt-contrib-connect');
// grunt.loadNpmTasks('grunt-contrib-watch');
// grunt.loadNpmTasks('grunt-contrib-compass');
// grunt.loadNpmTasks('grunt-exec');
grunt.loadNpmTasks('grunt-contrib-sass');
// // grunt.loadNpmTasks('grunt-contrib-jshint');
// grunt.loadNpmTasks('grunt-contrib-uglify');
// grunt.loadNpmTasks('grunt-uncss');
// grunt.loadNpmTasks('grunt-contrib-cssmin');

 grunt.loadNpmTasks('grunt-iconizr');
 grunt.registerTask('build-icons', ['iconizr']);


grunt.registerTask('build', [
'jshint',
'uglify:dist',
'compass:dist'
]);



grunt.registerTask('load_sitemap_json', function() {
    var sitemap_urls = grunt.file.readJSON('./sitemap.json');
    grunt.config.set('uncss.dist.options.urls', sitemap_urls);
    });


    grunt.registerTask('deploy', ['exec:get_grunt_sitemap','load_sitemap_json','uncss:dist']);  



  grunt.registerTask('default', [
    'connect',
    // 'jshint',
    // 'uglify:dev',
    'compass:dev',
    'watch'
  ]);


    grunt.registerTask('compress', [
    'uncss',
    'cssmin'
  ]);



};