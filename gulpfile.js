var gulp = require('gulp');
var browserSync = require('browser-sync');
var less = require('gulp-less');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');

var config = {
	phpIn: './**/*.php',
	lessDir: './assets/less/custom//**/*.less',
	lessIn: './assets/less/custom/style.less',
	lessOut: './',
	sourcemapOut: './assets/css/maps/',
	cssIn: './css/**/*.css',
	cssOut: './css/',
	cssOutName: 'style.css',
	localhostIn: 'http://localhost:10004/',
};

gulp.task('reload', function () {
	browserSync.reload();
});

gulp.task('serve', ['less'], function () {
	browserSync({
		notify: false,
		proxy: config.localhostIn,
	});

	gulp.watch([config.phpIn], ['reload']);
	gulp.watch(config.lessDir, ['less']);
});

gulp.task('default', ['serve']);

gulp.task('less', function () {
	gulp.src(config.lessIn)
		.pipe(sourcemaps.init())
		.pipe(less())
		.pipe(
			autoprefixer({
				browsers: ['last 3 versions'],
			}),
		)
		.pipe(cleanCSS({compatibility: 'ie8',  level: 2, advanced: false}))
		.pipe(sourcemaps.write(config.sourcemapOut))
		.pipe(gulp.dest(config.lessOut))
		.pipe(browserSync.stream());
});
