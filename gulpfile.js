var
	proxyUrl = "localhost/webarq-project/promag2-fe",
	gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
	useref = require('gulp-useref'),
	uglify = require('gulp-uglify'),
	gulpif = require('gulp-if'),
	cssnano = require('gulp-cssnano'),
	imagemin = require('gulp-imagemin'),
	cache = require('gulp-cache'),
	del = require('del'),
	runSquence = require('run-sequence');


//sass watcher
gulp.task('sass', function() {
	return gulp.src("sass/**/*.scss")
		.pipe(sourcemaps.init())
		.pipe(sass({
			errLogToConsole: true,
			outputStyle: 'expanded'
		}).on('error', sass.logError))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./css/'))
		// .pipe(browserSync.stream());
		.pipe(reload({stream: true}));
});

//browser sync
gulp.task('browserSync', function() {
	browserSync({
		proxy: proxyUrl,
		port: 3000,
		files: [
			'./sass/*.scss',
			'./css/*.css',
			'./js/*.js',
			'./*.php'
		],
	});
});

//optimizing js & css
gulp.task('optimizeCode', function() {
	return gulp.src('./*.php')
		.pipe(useref())
		.pipe(gulpif('*.js', uglify()))
		.pipe(gulpif('*.css', cssnano()))
		.pipe(gulp.dest('optimized'));
});

//task for optimizing images
gulp.task('optimizeImages', function() {
	return gulp.src('./images/**/*.+(png|jpg|jpeg|gif|svg)')
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(gulp.dest('optimized/images'));
});

//Copy fonts folder to optimized folder
gulp.task('fonts', function() {
	return gulp.src('./fonts/**/*')
		.pipe(gulp.dest('./optimized'));
});

//Cleaning folder optimized
gulp.task('clean:optimized', function() {
	return del.sync(['optimized/**/*', '!optimized/images', '!optimized/images/**/*']);
});

//Cleaning folder optimized (cache & file)
gulp.task('clean', function() {
	return del.sync('optimized').then(function(cb) {
		return cache.clearAll(cb);
	});
});

//gulp watcher
gulp.task('watch', gulp.parallel('sass', 'browserSync'), function() {
	gulp.watch(['./sass/**/*.scss'], ['sass']);
	gulp.watch("./*.php").on('change', reload);
	gulp.watch("./js/**/*.js").on('change', reload);
});

// Build Sequences
gulp.task('build', gulp.parallel(['clean:optimized', 'sass'], ['optimizeCode', 'optimizeImages', 'fonts']));
gulp.task('default', gulp.parallel('watch'));
