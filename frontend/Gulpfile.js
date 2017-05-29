
var reportError = function (error) {
    var lineNumber = (error.lineNumber) ? 'LINE ' + error.lineNumber + ' -- ' : '';

    notify({
        title: 'Task Failed [' + error.plugin + ']',
        message: lineNumber + 'See console.',
        sound: 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
    }).write(error);

    gutil.beep(); // Beep 'sosumi' again

    // Inspect the error object
    //console.log(error);

    // Easy error reporting
    //console.log(error.toString());

    // Pretty error reporting
    var report = '';
    var chalk = gutil.colors.white.bgRed;

    report += chalk('TASK:') + ' [' + error.plugin + ']\n';
    report += chalk('PROB:') + ' ' + error.message + '\n';
    if (error.lineNumber) { report += chalk('LINE:') + ' ' + error.lineNumber + '\n'; }
    if (error.fileName)   { report += chalk('FILE:') + ' ' + error.fileName + '\n'; }
    console.error(report);

    // Prevent the 'watch' task from stopping
    this.emit('end');
}

var paths = {
  sourcePath: 'src',
  destinationPath: '../public_html',
  styles: '/scss/',
  script: '/js/',
};

var gulp = require('gulp'),
  gutil = require('gulp-util'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  sourcemaps = require('gulp-sourcemaps'),
  browserSync = require('browser-sync'),
  autoprefixer = require('autoprefixer'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  reload = browserSync.reload,
  cssnano = require('cssnano'),
  plumber = require('gulp-plumber'),
  notify = require('gulp-notify'),
  jshint = require('gulp-jshint'),
  stylish = require('jshint-stylish'),
  order = require('gulp-order'),
  postcssflexbugsfixes = require('postcss-flexbugs-fixes');

// var onError = function (err) {
//   gutil.beep();
//   gutil.log(gutil.colors.red(err.message));
//   this.emit('end');
// };

// --- Basic Tasks ---
gulp.task('sass', function() {
  var plugins = [
    autoprefixer({browsers: ['last 2 versions'], cascade: false}),
    cssnano(),
    postcssflexbugsfixes()
  ];
  return gulp.src(['src/scss/**.scss'])
    .pipe(plumber({
        errorHandler: reportError
      }))
    .pipe(
      sass({
          errLogToConsole: true
      }))
    .pipe(postcss(plugins))
    .pipe(gulp.dest('../public_html/css/'))
    .pipe(reload({stream: true}))
    .on('error', reportError);
});

gulp.task('js', function() {
  return gulp.src([paths.sourcePath + paths.script + '**/*.js'])

    .pipe(jshint())
    .pipe(jshint.reporter(stylish))
    .pipe(plumber({
      errorHandler: reportError
    }))
    .pipe(order([
      "vendor/**/*.js",
      "components/**/*.js"
    ]), { base: './' })
    .pipe(sourcemaps.init())
    .pipe(concat('script.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.destinationPath + '/js/'))
    .pipe(reload({stream: true}))
    .on('error', reportError);
});

gulp.task('serve', function() {
  browserSync.init({
      proxy: "stocksdigital.dev:8888"
  });

  gulp.watch(paths.sourcePath + paths.styles + '**/*.scss', ['sass']);
  gulp.watch(paths.sourcePath + paths.script + '**/*.js', ['js']);
  gulp.watch('*.html').on('change', reload);
});


gulp.task('default', ['sass', 'js', 'serve']);
gulp.task('build', ['sass', 'js']);
