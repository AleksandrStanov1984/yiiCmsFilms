<?php





return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['backendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        'login'                     => 'site/login',
        'logout'                    => 'site/logout',
        'films'                     => 'films/index',
        'films/<id>'                => 'films/view',
    ]
];