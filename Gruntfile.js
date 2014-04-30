module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            sass: {
                files: ['sass/**/*.{scss,sass}' ],
                tasks: ['sass:dist']
            },
            autoprefixer: {
                // When this file changes
                files: ['css/ecstatic.css'],
                // Run this task
                tasks: ['autoprefixer']
            },
            livereload: {
                files: ['*.html', '*.php', 'js/**/*.{js,json}', 'css/*.css', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
                options: {
                    livereload: true
                }
            }
        },
        sass: {
            dist: {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'css/ecstatic.css': 'sass/ecstatic.scss'
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
                    'css/ecstatic.css' : 'css/ecstatic.css'
                }
            }
        }
    });
    grunt.registerTask('default', ['sass:dist', 'autoprefixer', 'watch']);
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');
};