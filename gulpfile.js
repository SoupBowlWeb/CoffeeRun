var     gulp = require('gulp'),
        notify = require('gulp-notify'),
        less = require('gulp-less'),
        autoprefix = require('gulp-autoprefixer'),
        minifyCss = require('gulp-minify-css'),
        concat = require('gulp-concat'),
        uglify = require('gulp-uglify'),
        EXPRESS_PORT = 4000,
        EXPRESS_ROOT = __dirname,
        LIVERELOAD_PORT = 35729;

var publicFolder = 'public';
var appFolder = 'app';


gulp.task( 'default' , [ 'less' , 'watch' ] );


gulp.task( 'less' , function()
{
    return gulp.src( publicFolder + '/css/*.less' )
        .pipe( less() )
        .pipe( gulp.dest(publicFolder + '/css') )
        .pipe( notify('Finished LESS!') );
});


gulp.task( 'watch' , function()
{
    startExpress();

    startLivereload();

    gulp.watch( publicFolder + '/css/custom.less' , [ 'less' ] );

    gulp.watch( publicFolder + '/css/custom.css' , notifyLivereload );

    gulp.watch( appFolder + '/**/*.php' , notifyLivereload );

});


















// Let's make things more readable by
// encapsulating each part's setup
// in its own method
function startExpress() {
    var express = require('express');
    var app = express();
    app.use(require('gulp-livereload'));
    app.use(express.static(EXPRESS_ROOT));
    app.listen(EXPRESS_PORT);
}


// We'll need a reference to the tinylr
// object to send notifications of file changes
// further down
var lr;
function startLivereload() {
    lr = require('tiny-lr')();
    lr.listen(LIVERELOAD_PORT);
}



// Notifies livereload of changes detected
// by `gulp.watch()`
function notifyLivereload(event) {
    gulp.src(event.path, {read: false})
        .pipe(require('gulp-livereload')(lr));
}