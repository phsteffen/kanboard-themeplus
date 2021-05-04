

// -------------------------------------------------------------------------- //
// GULP-MODULE                                                                //
// -------------------------------------------------------------------------- //

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleancss = require('gulp-clean-css');



// -------------------------------------------------------------------------- //
// VARS
// -------------------------------------------------------------------------- //

var paths = {
	styles: {
		src: 'resources/sass/*.scss',
		dest: './dist/Themeplus/Css/'
	}
};



// -------------------------------------------------------------------------- //
// STYLE                                                                      //
// -------------------------------------------------------------------------- //

function styles() {
	return gulp.src(paths.styles.src)
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(cleancss())
		.pipe(gulp.dest(paths.styles.dest));
}



// -------------------------------------------------------------------------- //
// WATCH-TASK
// -------------------------------------------------------------------------- //

function init() {
	styles();
	gulp.watch('resources/sass/**/*.scss', styles);
}



// -------------------------------------------------------------------------- //
// SERIES AND TASKS
// -------------------------------------------------------------------------- //

exports.styles = styles;
exports.default = init;
