<?php
declare(strict_types=1);
// declare environment data for the application, copy this file and rename to env.php

return [
    'schemeHost'=>[
        'dev/app'=>'http://project.test',
        'prod/app'=>'https://project.com'
    ],

    'path'=>[
        'src'=>__DIR__.'/src',
        'js'=>__DIR__.'/js',
        'scss'=>__DIR__.'/scss',
        'storage'=>__DIR__.'/storage',
        'vendor'=>__DIR__.'/vendor'
    ],

    '@dev'=>[
        'db'=>['mysql:host=localhost;port=3306;dbname=project','root','']],

    '@prod'=>[
        'db'=>['mysql:host=localhost;port=3306;dbname=project','','']],

    '@assert'=>[
        'db'=>['mysql:host=localhost;port=3306;dbname=projectTest','root','']]
];
?>