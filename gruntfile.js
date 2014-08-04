module.exports = function  (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify : {
            options : {
                mangle : false,
                compress : true,
                sourceMap : 'dist/app.map'
            },
            target : {
                src : ['dest/app.js'],
                dest : 'dist/app.min.js'
            }
        },
        jshint : {
            options: {
            },
            target : {
                src : 'dest/*.js'
            }
        },
        concat : {
            options : {
                seperator: ';',
                banner : '/* Copyright 2014 OYGO GmbH - Germany */\n'
            },
            target: {
                src : ['dest/main.js', 'dest/util.js', 'dest/script.js', 'dest/app.js' ],
                dest: 'dest/app.js'
            }

        },
        watch : {
            scripts: {
                files: ['dest/*.js', 'assets/coffee/*.coffee'],
                tasks: ['default']
            }
        },
        coffee : {
            options : {
                bare: true,
                join: false,
                seperator: ';'
            },
            target: {
                expand: true,
                cwd: 'assets/coffee',
                src: '*.coffee',
                dest: 'dest/',
                ext: '.js'
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-coffee');
    grunt.registerTask('default', ['coffee','jshint', 'concat', 'uglify']);
};