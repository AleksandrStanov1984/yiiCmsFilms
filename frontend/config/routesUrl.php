<?php


return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        ''              => 'site/index',
        'about'         => 'site/about',
        'about/news'    => 'site/news',
        'signup'        => 'site/signup',
        'login'         => 'site/login',
        'affiche'       => 'cinema/affiche',
        'film/<id>'     => 'cinema/film',
    ]
];

