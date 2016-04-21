var gulp = require("gulp"),                     // The streaming build system
    del = require("del"),                       // Delete files and folders
    merge = require("merge-stream"),            // Create a stream that emits events from multiple other streams
    changed = require("gulp-changed"),          // Only pass through changed files
    imagemin = require("gulp-imagemin"),        // Minify PNG, JPEG, GIF and SVG images
    plumber = require("gulp-plumber"),          // Prevent pipe breaking caused by errors from gulp plugins
    notify = require("gulp-notify"),            // Gulp plugin to send messages based on Vinyl Files or Errors to Mac OS X
    compass = require("gulp-compass"),          // Compile Sass to CSS with Compass
    minifyCSS = require("gulp-minify-css"),     // Create a minified CSS file
    concat = require("gulp-concat"),            // Concatenates files
    uglify = require("gulp-uglify"),            // Minify files with UglifyJS
    help = require("gulp-task-listing"),        // Adds the ability to provide a task listing for your gulpfile
    rename = require("gulp-rename"),            // Rename files
    jshint = require("gulp-jshint");            // A JavaScript Code Quality Tool


/**
 *   Plumber error template
 */

var plumberOpts = {

    "errorHandler": notify.onError({
        "title": "Error",
        "message": "<%=error.message %>"
    })

};


/**
 *   Import configuration
 */

var config = require('./config.json');


/**
 *   Help task
 */

gulp.task('help', help);


/**
 *   Default task
 */

gulp.task("default", config.tasks.default);


/**
 *   Clean tasks
 */

gulp.task("clean", config.tasks.clean);


gulp.task("clean:assets", function (next) {

    del(config.assets.files.map(function (item) {

        return item.dist;

    }), next);

});


gulp.task("clean:css", function (next) {

    del(config.styles.files.map(function (item) {

        return item.dist;

    }), next);

});


gulp.task("clean:js", function (next) {

    del(config.scripts.files.map(function (item) {

        return item.dist;

    }), next);

});


/**
 *   Build tasks
 */

gulp.task("build", config.tasks.build);

gulp.task("build:assets", function () {
    return merge.apply(null, config.assets.files.map(function (assetsSource) {

        return gulp
            .src(assetsSource.src)
            .pipe(changed(assetsSource.dist))
            .pipe(imagemin(config.assets.options.imagemin || {}))
            .pipe(gulp.dest(assetsSource.dist));
    }));
});


gulp.task("build:css", function () {

    return merge.apply(null, config.styles.files.map(function (style) {
        function swallowError (error) {  console.log(error.toString()); this.emit('end'); };
        return gulp
            .src(style.src)
            .pipe(plumber(plumberOpts))
            .pipe(compass(config.styles.options.scss))
            .on('error', swallowError)
            .pipe(rename(style.filename))
            .pipe(minifyCSS())
            .pipe(gulp.dest(style.dist))
            .pipe(notify({
                "title": "Build CSS complete",
                "message": style.dist + style.filename
            }));

    }));

});


gulp.task("build:js", function () {
    return merge.apply(null, config.scripts.files.map(function (script) {
        return gulp
            .src(script.src)
            .pipe(plumber(plumberOpts))
            .pipe(concat(script.filename))
            .pipe(uglify())
            .pipe(gulp.dest(script.dist))
            .pipe(notify({
                "title": "Build JS complete",
                "message": script.filename
            }));
    }));
});



/**
 *   Lint tasks
 */

gulp.task("watch", config.tasks.watch);

gulp.task("watch:assets", function () {

    gulp.watch(config.assets.watch, ["build:assets"]);

});

gulp.task("watch:css", function () {

    gulp.watch(config.styles.watch, ["build:css"]);

});

gulp.task("watch:js", function () {

    gulp.watch(config.scripts.watch, ["build:js"]);

});



/**
 *   Lint tasks
 */

gulp.task("lint:js", function () {
    return merge.apply(null, config.scripts.files.map(function (script) {
        return gulp
            .src(script.src)
            .pipe(jshint(config.scripts.options.jshint || {}))
            .pipe(plumber(plumberOpts));
    }));
});
