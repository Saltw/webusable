//
// Please don't forget to do `gulp build` before
// pushing to repo
// --------------------------------------------------


var pjson      = require('./package.json'),
    gulp       = require("gulp"),
    path       = require('path'),
    gutil      = require('gulp-util'),
    notify     = require("gulp-notify"),
    concat     = require("gulp-concat"),
    rename     = require("gulp-rename"),
    imagemin   = require("gulp-imagemin"),
    less       = require("gulp-less"),
    sass       = require("gulp-sass"),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS   = require('gulp-clean-css');

var config = {
    paths: {
        images: {
            src:  ["img/**/*.jpg", "img/**/*.jpeg", "img/**/*.png"],
            dest: "img"
        },
        less: {
            path: "less/**/*.less",
            src: [
                "less/base-calmy.less",
                "less/base-darkness.less",
                "less/base-default.less",
                "less/base-gebeus-waterfall.less",
                "less/base-radiant-orchid.less",
                "less/base-roseus.less"
            ],
            srcDev: "less/base-default.less",
            dest: "css"
        },
        sass: {
            path: "sass/**/*.scss",
            src: [
                "sass/admin.scss",
            ],
            srcDev: "sass/admin.scss",
            dest: "css"
        }
    }
};

gulp.task("images", function(){
    return gulp.src(config.paths.images.src)
        .pipe(imagemin({
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest(config.paths.images.dest));
});

gulp.task("less", function(){
    return gulp.src(config.paths.less.src)
        .pipe(less().on('error', function(err) {
            gutil.log(err);
            this.emit('end');
        }))
        // .pipe(cleanCSS({
        //     advanced: false
        // }))
        .pipe(rename(function (path) {
            path.basename = path.basename.replace('base', 'bootstrap');
        }))
        .pipe(gulp.dest(config.paths.less.dest))
        .pipe(notify({
            sound: true,
            title: "Build completed!",
            message: "Archivo compilado: <%= file.relative %>. Sin errores. Imagenes optimizadas",
            icon: path.join(__dirname, "img/ios/apple-touch-icon.png")
        }));
});

gulp.task("less-dev", function(){
    return gulp.src(config.paths.less.srcDev)
        .pipe(sourcemaps.init())
        .pipe(less().on('error', function(err) {
            gutil.log(err);
            this.emit('end');
        }))
        .pipe(sourcemaps.write())
        .pipe(rename(function (path) {
            path.basename = path.basename.replace('base', 'bootstrap');
        }))
        .pipe(gulp.dest(config.paths.less.dest))
        .pipe(notify({
            sound: true,
            title: "Compilation done! =)",
            message: "File: <%= file.relative %>. No errors.",
            icon: path.join(__dirname, "img/ios/apple-touch-icon.png")
        }));
});

gulp.task("sass", function(){
    return gulp.src(config.paths.sass.src)
        // .pipe(sass().on('error', function(err) {
        //     gutil.log(err);
        //     this.emit('end');
        // }))
        .pipe(sass({sourceComments: true}).on('error', function(err) {
            gutil.log(err);
            this.emit('end');
        }))
        // .pipe(cleanCSS({
        //     advanced: false
        // }))
        .pipe(gulp.dest(config.paths.sass.dest))
        .pipe(notify({
            sound: true,
            title: "Build completed!",
            message: "Archivo compilado: <%= file.relative %>. Sin errores. Imagenes optimizadas",
            icon: path.join(__dirname, "img/ios/apple-touch-icon.png")
        }));
});

gulp.task("sass-dev", function(){
    return gulp.src(config.paths.sass.srcDev)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', function(err) {
            gutil.log(err);
            this.emit('end');
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(config.paths.sass.dest))
        .pipe(notify({
            sound: true,
            title: "Compilation SASS done! =)",
            message: "File: <%= file.relative %>. No errors.",
            icon: path.join(__dirname, "img/ios/apple-touch-icon.png")
        }));
});

gulp.task("build", ["less", "sass", "images"]);

gulp.task("watch", function(){
    gulp.watch(config.paths.less.path, ["less"]);
    gulp.watch(config.paths.sass.path, ["sass"]);
});

gulp.task("watch-dev", function(){
    gulp.watch(config.paths.less.path, ["less-dev"]);
    gulp.watch(config.paths.sass.path, ["sass-dev"]);
});

gulp.task("default", function() {
    console.log('Silence is gold');
});
