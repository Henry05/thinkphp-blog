var gulp = require('gulp');

// 压缩 css 文件
// 获取 minify-css 模块（用于压缩 CSS）
var minifyCSS = require('gulp-minify-css')
// 在命令行使用 gulp css 启动此任务
gulp.task('css', function () {
    // 1. 找到文件
    gulp.src('Public/Home/CSS/*.css')
    // 2. 压缩文件
        .pipe(minifyCSS())
    // 3. 另存为压缩文件
        .pipe(gulp.dest('Public/Home/dist/css'))
})

// 在命令行使用 gulp auto 启动此任务
gulp.task('auto', function () {
    // 监听文件修改，当文件被修改则执行 css 任务
    gulp.watch('css/*.css', ['css'])
});

// 使用 gulp.task('default') 定义默认任务
// 在命令行使用 gulp 启动 css 任务和 auto 任务
gulp.task('default', ['css', 'auto'])

var htmlmin = require('gulp-htmlmin');
 
gulp.task('minify', function() {
  return gulp.src('App/Home/View/Public/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('dist'))
});