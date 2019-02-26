<?php

ini_set('display_errors', 1);
error_reporting(-1);

//echo 'test';
//
//$arr = [];
//
//echo $arr['test'];
//
//if (empty($arr['test'])) {
//    echo 'a';
//}

$var = [];
isset($var['hoge']);

is_null($var[0]);
is_null($var['hoge']);

echo $var[0];
echo $var['hoge'];

echo empty($var[0]);
echo empty($var['hoge']);
