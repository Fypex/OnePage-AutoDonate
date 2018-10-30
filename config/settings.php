<?php

// Настройки всей системы
function settings()
{
    return [
        'site' => [  // Настройки сайта
            'title' => '',
            'keywords' => '',
            'description' => ''
        ],

        'freekassa' => [  // Настройки freekassa
            'key' => 0000000,
            'shop_id' => 0000000
        ],

        'rcon' => [ // Настройки rcon
            'ip' => 'localhost',
            'port' => '25565',
            'password' => 'secret'
        ],

    ];
}