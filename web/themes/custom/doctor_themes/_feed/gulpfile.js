(function (r) {
  "use strict";
  const gulp         = r("gulp");
  const sass         = r("gulp-sass");
  sass.compiler      = r('node-sass');
  const gutil        = r('gulp-util');
  const concat       = r('gulp-concat');
  const rename       = r('gulp-rename');
  const eslint       = r('gulp-eslint');
  const notify       = r('gulp-notify');
  const plumber      = r('gulp-plumber');
  const babel        = r('gulp-babel');
  const uglifycss    = r('gulp-uglifycss');
  const modernizr    = r('gulp-modernizr');
  const sourcemaps   = r('gulp-sourcemaps');
  const autoprefixer = r('gulp-autoprefixer');
  const browserSync  = r('browser-sync').create();
  const uglifyjs     = r('gulp-uglify-es').default;
  const reload       = browserSync.reload;

  /*
   Configurations
   */
  var configs = {
    styles : {
      src : './styles/**/*.scss',
      dist: '../css'
    },
    scripts: {
      src : './scripts/**/*.js',
      dist: '../js'
    },
    lib    : {
      css: {
        bootstrap: 'node_modules/bootstrap/scss/bootstrap.scss',
      },
      js : {
        bootstrap: 'node_modules/bootstrap/dist/js/bootstrap.min.js',
        popper   : 'node_modules/popper.js/dist/umd/popper.min.js'
      }
    },
    domain : "http://localhost.test"
  };

  /*
   Sass complilation
   */
  gulp.task('sass', function () {
    return gulp.src(configs.styles.src)
      .pipe(sourcemaps.init())
      .pipe(sass().on('error', function (err) {
        notify.onError({
          title  : "Gulp error",
          message: err.messageFormatted.toString()
        })(err);
        gutil.beep();
        this.emit('end');
      }))
      .pipe(concat('main.css'))
      .pipe(autoprefixer())
      .pipe(uglifycss())
      .pipe(rename({suffix: '.min'}))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(configs.styles.dist))
      .pipe(reload({stream: true}));
  });

  /*
   Sass complilation for libraries
   */
  gulp.task('libsass', function () {
    return gulp.src(configs.lib.css.bootstrap)
      .pipe(sourcemaps.init())
      .pipe(sass().on('error', function (err) {
        notify.onError({
          title  : "Gulp error",
          message: err.messageFormatted.toString()
        })(err);
        gutil.beep();
        this.emit('end');
      }))
      .pipe(autoprefixer())
      .pipe(uglifycss())
      .pipe(rename({suffix: '.min'}))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(configs.styles.dist))
      .pipe(reload({stream: true}));
  });

  /*
   Js linting and uglification
   */
  gulp.task('js', function () {
    return gulp.src(configs.scripts.src)
      .pipe(plumber({
        errorHandler: function (err) {
          notify.onError({
            title  : "Gulp error",
            message: err.toString()
          })(err);
          gutil.beep();
          this.emit('end');
        }
      }))
      .pipe(sourcemaps.init())
      .pipe(babel())
      .pipe(concat('main.js'))
      .pipe(eslint())
      .pipe(eslint.format())
      .pipe(eslint.failAfterError())
      .pipe(uglifyjs())
      .pipe(rename({suffix: '.min'}))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(configs.scripts.dist))
      .pipe(reload({stream: true}));
  });

  /*
 Js linting and uglification for libraries
 */
  gulp.task('libjs', function () {
    return gulp.src([configs.lib.js.bootstrap, configs.lib.js.popper])
      .pipe(plumber({
        errorHandler: function (err) {
          notify.onError({
            title  : "Gulp error",
            message: err.toString()
          })(err);
          gutil.beep();
          this.emit('end');
        }
      }))
      .pipe(sourcemaps.init())
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(configs.scripts.dist))
      .pipe(reload({stream: true}));
  });

  /*
    Custom Modernizr generate
   */
  gulp.task('modernizr', function () {
    return gulp.src(configs.scripts.src)
      .pipe(modernizr())
      .pipe(babel())
      .pipe(uglifyjs())
      .pipe(rename({suffix: '.min'}))
      .pipe(gulp.dest(configs.scripts.dist))
  });

  /*
   Watch
   */
  gulp.task('watch', function () {
    browserSync.init({
      proxy: configs.domain
    });

    gulp.watch(configs.styles.src, gulp.series('sass'));
    gulp.watch(configs.scripts.src, gulp.series('js'));
  });

  /*
   Default
   */
  gulp.task('default', gulp.parallel('libsass', 'sass', 'libjs', 'js', 'modernizr', 'watch'));
  gulp.task('built', gulp.parallel('libsass', 'sass', 'libjs', 'js', 'modernizr'));

}(require));
