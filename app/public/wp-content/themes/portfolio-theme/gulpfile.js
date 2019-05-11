// inject dependecies
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');
    
// create object with all paths
var paths = {
  css: {
    src: './assets/scss/*.scss',
    dest: './assets/scss/public/'
  },
  js: {
    src: './assets/js/*.js',
    dest: './assets/js/public/'
  }
};

// create function for compiling scss
function css(){
  return (
    gulp
      .src(paths.css.src)
      .pipe(sass({
        errorLogToConsole: true,
        outputStyle: 'compressed'
      }))
      .on('error', console.error.bind(console))
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(paths.css.dest))
  );
}

// create function for minimizing and concatinating js
function js(){
  return (
    gulp
      .src(paths.js.src)
      .pipe(uglify())
      .pipe(concat('app.min.js'))
      .pipe(gulp.dest(paths.js.dest))
    );
}

// create function for watch tasks
function watch(){
  css();
  js();
  gulp.watch(paths.css.src, css);
  gulp.watch(paths.js.src, js);
}

// export functions to tasks
exports.css = css;
exports.js = js;
exports.watch = watch;