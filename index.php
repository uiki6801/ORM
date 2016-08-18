<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/18
 * Time: 15:28
 */
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Database;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule = new Database;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'erp',
    'username'  => 'root',
    'password'  => '123456',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();
$capsule->bootEloquent();

$users = Database::table('product_items')->first();

var_dump($users);