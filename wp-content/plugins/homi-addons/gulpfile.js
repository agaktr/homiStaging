var gulp    = require('gulp');
var concat  = require('gulp-concat');
var uglify  = require('gulp-uglify');
var merge   = require('merge-stream');
var sass    = require('gulp-sass');

sass.compiler = require('node-sass');


var config = {
    srcDirJS: 'public/js/src',
    destDirJS: 'public/js',
    pluginsDir: 'public/js/src/plugins',
    srcDirSASS: 'public/css/sass',
    destDirSASS: 'public/css'
};



//The sass styles to compile combine and minify
var styles = [
    {
        src : [
            config.srcDirSASS + '/plugins/owl.carousel.scss',
            config.srcDirSASS + '/plugins/pignose-calendar.scss',
            config.srcDirSASS + '/plugins/swiper.min.scss',
            config.srcDirSASS + '/old-styles.scss',
            config.srcDirSASS + '/base.scss',
            config.srcDirSASS + '/after-request-page.scss',
            config.srcDirSASS + '/login.scss',
            config.srcDirSASS + '/theme-override.scss',
            config.srcDirSASS + '/password-pages.scss',
            config.srcDirSASS + '/homepage.scss',
            config.srcDirSASS + '/availability.scss',
            config.srcDirSASS + '/blog.scss'
        ],
        name : 'public.min',
        dest : config.destDirSASS + ''
    }
];


var plugins = {
    owlCarousel: config.pluginsDir + '/owl.carousel.js',
    pignose: config.pluginsDir + '/pignose.calendar.full.js',
    swiper: config.pluginsDir + '/swiper.min.js'
};


//The scripts to combine and minify
var scripts = [
    {
        src : [
            plugins.owlCarousel,
            plugins.pignose,
            plugins.swiper,
            config.srcDirJS + '/tabs.js',
            config.srcDirJS + '/base.js',
            config.srcDirJS + '/steps-control.js',
            config.srcDirJS + '/map.js',
            config.srcDirJS + '/dropdown.js',
            config.srcDirJS + '/accordion.js',
            config.srcDirJS + '/messages.js',
            config.srcDirJS + '/register.js',
            config.srcDirJS + '/init.pignose.calendar.js',
            config.srcDirJS + '/seller-availability.js',
            config.srcDirJS + '/form-rent-property-valuation.js',
            config.srcDirJS + '/form-schedule-tour.js',
            config.srcDirJS + '/form-sell-property-valuation.js',
            config.srcDirJS + '/form-rent-interest.js',
            config.srcDirJS + '/areas-validation.js',
            config.srcDirJS + '/password.js',
            config.srcDirJS + '/login.js',
            config.srcDirJS + '/email-check.js',
            config.srcDirJS + '/cookies.js',
            config.srcDirJS + '/ctaForm.js'
        ],
        name : 'public.min',
        dest : config.destDirJS + ''
    }
];


//Task to Compile the styles, scripts are combined and minified
gulp.task('sass:compile', function () {

    var tasks = styles.map(function( file){
        return gulp.src( file.src )
            .pipe( concat(file.name + '.css' ) )
            .pipe( sass({outputStyle: 'compressed'}).on('error', sass.logError) )
            .pipe( gulp.dest( file.dest )  );
    });

    return merge(tasks);


});


//Task to Compile the scripts, scripts are combined and minified
gulp.task('scripts:compile', function() {

    var tasks = scripts.map(function( file){
        return gulp.src( file.src )
            .pipe( concat(file.name + '.js' ) )
            .pipe( uglify().on('error', function(e){ console.log(e); } ) )
            .pipe( gulp.dest( file.dest ) );
    });

    return merge(tasks);

});


//Task to Watch only for changes in styles
gulp.task('sass:watch', function () {
    return gulp.watch( config.srcDirSASS + '/**/*.scss', gulp.series( 'sass:compile' ) );
});


//Task to Watch only for changes in scripts
gulp.task( 'scripts:watch', function() {
    return gulp.watch( config.srcDirJS + '/**/*.js', gulp.series( 'scripts:compile' ) );
});


//Task to Watch both styles and scripts
gulp.task('watch', function(done){

    gulp.watch( config.srcDirSASS + '/**/*.scss', gulp.series( 'sass:compile' ) );
    gulp.watch( config.srcDirJS + '/**/*.js', gulp.series( 'scripts:compile' ) );
    done();

});


//Change the default gulp task to compile styles and scripts and then watch
gulp.task( 'default', gulp.series( 'sass:compile', 'scripts:compile', 'watch' ) );
