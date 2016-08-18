<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/1
 * Time: 16:25
 */

$type = 'PickDocument-2';
if (substr($type, 0, 12) == 'PickDocument') {
    $pick = explode('-', $type)[1];

    if ($pick == 1) {
        echo $pick;
    } else {
        echo $pick;
    }

}