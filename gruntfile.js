
module.exports = function(grunt){
    require('load-grunt-tasks')(grunt);
    //deafult tasks
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),
        uglify:{
            options:{
                mangle: false //fucntion and variable names unchanged
            },//options
            js:{
                files:{
                    'dist/js/mig.min.js':'src/js/*.js'
                }
            },//js
        },//uglify
        cssmin:{
            target: {
                files: {
                'dist/css/mig.min.css': ['src/css/*.css']
                }
            },
        },//cssmin
        pug:{
            compile:{
                options:{
                    pretty : true,
                    data:{
                        debug:false
                    }
                },//options
                files:{
                    'dist/index.php':'src/pug/main.pug',
                    'dist/contact.php':'src/pug/contact.pug',
                    'dist/onama.php':'src/pug/onama.pug',
                    'dist/proizvodi.php':'src/pug/proizvodi.pug',
                    'dist/brendovi.php':'src/pug/brendovi.pug',
                }//files
            }//compile
        },//pug
        watch:{
            js:{
                files:['src/js/*.js'],
                tasks:['uglify'],
                options:{
                    livereload : true
                }
            },//js
            css:{
                files:['src/css/*.css'],
                tasks:['cssmin'],
                options:{
                    livereload : true
                }
            },//css
            html:{
                files:['src/pug/*.pug','src/pug/templates/*.pug'],
                tasks:['pug'],
                options:{
                    livereload:true
                }
            },//pug html
        },//watch
    });
    //loading grunt plugins

    // Default task(s).
    grunt.registerTask('default', ['watch']);
};
