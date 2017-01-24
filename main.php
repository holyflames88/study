<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'RequestCrawler' => [
            'class' => 'common\components\RequestCrawler',
            'type' => 'json',
            'path' => 'common/',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
