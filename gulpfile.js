var gulp = require('gulp');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');

var minifyCSS = require('gulp-minify-css');

gulp.task('styles',function(){
	gulp.src("wp-content/themes/theme-hackeryou/style.scss")
	.pipe(sass())
	.pipe(autoprefixer({browsers:['last 5 versions', 'ie 8']}))
	.pipe(minifyCSS())
	.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
	});

gulp.task('watch', function(){
	gulp.watch('wp-content/themes/theme-hackeryou/style.scss', ['styles']);
	});

gulp.task('default', ['watch']);

