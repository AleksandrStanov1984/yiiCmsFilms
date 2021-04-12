<?php


return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        ''              => 'site/index',
        'signup'        => 'site/signup',
        'login'         => 'site/login',
        'poster'       => 'film/poster',
        'film/<id>'     => 'film/film',
    ]
];

