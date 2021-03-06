<?php

require_once __DIR__.'\vendor\rk\config\default-config.php';
require_once __DIR__.'\app\common\config\common-config.php';
require_once __DIR__.'\app\environment\\'.$common['env'].'\config\config.php';


require_once __DIR__.'\vendor\rk\autoloader.php';

$config = array_merge($common, $environment);
$config['base_path'] =__DIR__;

$app = new rk\App($config);

$app->get('site',function($request,$response){
    echo  rk\base\View::render('site.welcome');
});
$app->get('home',function($request,$response){
    echo 'home';
});
$app->start();