
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');

gulp.task('css', function () {
	gulp.src('app/assets/sass/main.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(minifycss())
	.pipe(gulp.dest('public/css'));

	gulp.src('app/assets/sass/responsive.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(minifycss())
	.pipe(gulp.dest('public/css'));

	gulp.src('app/assets/sass/jumbotron.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(minifycss())
	.pipe(gulp.dest('public/css'));

	gulp.src('app/assets/sass/contact.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(minifycss())
	.pipe(gulp.dest('public/css'));

});

gulp.task('watch', function() {
	gulp.watch('app/assets/sass/**/*.scss', ['css']);
});

gulp.task('default',['watch']);
