

// -------------------------------------------------------------------------- //
// GULP-MODULE                                                                //
// -------------------------------------------------------------------------- //

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleancss = require('gulp-clean-css');



// -------------------------------------------------------------------------- //
// STYLE                                                                      //
// -------------------------------------------------------------------------- //

gulp.task('styles', function() {
	gulp.src('resources/sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer('last 3 versions', '> 1%', 'ie 8'))
		.pipe(cleancss({compatibility: 'ie8'}))
		.pipe(gulp.dest('dist/Themeplus/Css/'));
});



// -------------------------------------------------------------------------- //
// WATCH-TASK                                                                 //
// -------------------------------------------------------------------------- //

gulp.task('default',function() {
	gulp.start('styles');
	gulp.watch('resources/sass/**/*', ['styles']);
});
