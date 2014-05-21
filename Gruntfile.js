module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    outputStyle: 'compact'
                },
                files: {
                    'css/app.css': 'sass/app.scss'
                }
            }
        },
        autoprefixer: {

            options: {
                browsers: ['last 3 versions', '> 1%', 'ie 9']
            },

            dist: {
                // prefix the specified file
                files: {
                    'css/app.css' : 'css/app.css'
                }
            }
        },
        watch: {
            sass: {
                files: ['sass/**/*.{scss,sass}' ],
                tasks: ['sass:dist', 'autoprefixer']
            },
            livereload: {
                files: ['*.html', '*.php', 'js/**/*.{js,json}', 'css/*.css', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
                options: {
                    livereload: true
                }
            }
        }
    });
    grunt.registerTask('default', ['sass:dist', 'autoprefixer', 'watch']);
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');
};