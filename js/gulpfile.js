var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	jshint = require('gulp-jshint'),
	jsValidate = require('gulp-jsvalidate');

gulp.task('styles', function() {
	return gulp.src('../styles/*.scss')
		.pipe(sass({'sourcemap=none': true}))
		.pipe(concat('styles.css'))
		.pipe(gulp.dest('../styles/'))
});

gulp.task('jshint', function() {
	return gulp.src('../js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'))
});

gulp.task('jsValidate', function() {
	return gulp.src('../js/*.js')
		.pipe(jsValidate())
});

gulp.task('default', () => {
	gulp.watch(['../styles/*.scss'], gulp.series('styles'));
	gulp.watch(['../js/*.js'], gulp.series('jsValidate'));
	gulp.watch(['../js/*.js'], gulp.series('jshint'));
});
