
# Laravel 5 Database Query Log

> 只有在调试模式下可以使用

将sql查询语句、查询用时记录到日志文件，以供分析优化




## 安装

1. 通过composer安装
    ```shell
    composer require goodwong/laravel-database-query-log
    ```

2. 打开config/app.php，在providers数组里注册服务：
    ```php
    Goodwong\DatabaseQueryLog\QueryLogServiceProvider::class,
    ```



## 使用

打开日志文件，查看分析sql记录

> 推荐使用[goodwong/laravel-log-viewer](https://github.com/goodwong/laravel-log-viewer)，查看日志很方便

![](https://cloud.githubusercontent.com/assets/1575946/5243642/8a00b83a-7946-11e4-8bad-5c705f328bcc.png)
