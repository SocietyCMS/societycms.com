/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var
    gulp  = require('gulp'),
    watch = require('./resources/assets/semantic/tasks/watch'),
    build = require('./resources/assets/semantic/tasks/build') ;

// import task with a custom task name
gulp.task('watch-ui', watch);
gulp.task('build-ui', build);
