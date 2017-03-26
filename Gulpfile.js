

// -------------------------------------------------------------------------- //
// GULP-MODULE                                                                //
// -------------------------------------------------------------------------- //

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleancss = require('gulp-clean-css');
var rename = require('gulp-rename');
var del = require('del');



// -------------------------------------------------------------------------- //
// VARS                                                                       //
// -------------------------------------------------------------------------- //

var dirDistKanboardInstance = '../kanboard/dist/www/plugins/Themeplus';



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
// CLEAN AND COPY TO A KANBOARD-INSTANCE                                      //
// -------------------------------------------------------------------------- //

gulp.task('cleanKanboard', function(callback) {
	return del([dirDistKanboardInstance + '/**'], //This tells del to delete all files and folders within the dist folder
	{force:true});
});

gulp.task('copyKanboard', ['cleanKanboard'], function() {
	gulp.src('dist/Themeplus/**/*')
		.pipe(gulp.dest(dirDistKanboardInstance));
});



// -------------------------------------------------------------------------- //
// WATCH-TASK                                                                 //
// -------------------------------------------------------------------------- //

gulp.task('default',function() {
	gulp.start('styles');
	gulp.start('copyKanboard');
	gulp.watch('resources/sass/**/*', ['styles']);
	gulp.watch('dist/Themeplus/**/*', ['copyKanboard']);
});
