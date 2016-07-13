var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var plumber      = require('gulp-plumber');

gulp.task('sass', function() {
    return gulp.src([
        'src/scss/style.scss'
    ])
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('css'));
});

gulp.task('js_copy', function() {
    return gulp.src('src/js/vendor/*.js')
        .pipe(gulp.dest('js/vendor'))
});

gulp.task('js', ['js_copy'], function() {
    return gulp.src([
        'src/js/main.js'
    ])
    .pipe(plumber())
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js'))
});

gulp.task('css', function () {
    return gulp.src('./src/css/**/*')
        .pipe(gulp.dest('./css'));
});

gulp.task('default', ['sass', 'js','css']);

gulp.task('watch', function() {
    gulp.watch('src/scss/*.scss', ['sass']);
    gulp.watch('src/js/**/*.js', ['js']);
    gulp.watch('src/css/**/*', ['css']);
});
