<?php
/**
 * Created by PhpStorm.
 * User: zhengyibin
 * Date: 1/29/19
 * Time: 4:23 PM
 */

/*
 * Laravel 框架的 bootstrap/app.php
 * 1. 实例化一个容器对象（Illuminate\Foundation\Application）$app
 * 2. 在$app分别注册了3个单例对象：Http\Kernel，Console\Kernel和Debug\ExceptionHandler
 * 3. return $app
 */

$app = new Sassha\Foundation\Application;

