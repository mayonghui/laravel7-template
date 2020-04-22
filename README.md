<h1>laravel7-restful-api</h1>
一个laravel7的restful api实现方案，此项目是在 
`composer create-project --prefer-dist laravel/laravel blog` 
基础上进行优化

<h3>删除冗余文件，美化结构：</h3>
* 删除视图相关的文件  resources/js resources/sass resources/views
* 删除中间件和去除引用 EncryptCookies RedirectIfAuthenticated VerifyCsrfToken 
* 删除前端包依赖管理文件 package.json webpack.mix.js

<h3>扩展框架：</h3>
* 增加框架扩展目录app/extensions
* 增加app/traits目录
* 增加app/Constants目录
* 扩展框架request类

<h3>修改默认默认配置项：</h3>
* .env.example文件的APP_NAME值改为Laravel7-template
* app/config/database.php 文件的database项默认值改为laravel7-template，username项默认值改为root，engine默认改为InnoDB


<h3>安装：</h3>
`git clone https://github.com/mayonghui/laravel7-template.git`

其他：后期迭代时如果要改为全栈式框架可以根据优化步骤git log进行还原。
