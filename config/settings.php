<?php

// Настройки всей системы
function settings()
{
    return [
        'site' => [  // Настройки сайта
            'title' => 'GameClub',
            'keywords' => '',
            'description' => ''
        ],

        'freekassa' => [  // Настройки freekassa
            'key' => 'merchant_secret',
            'shop_id' => 'merchant_id'
        ],

        'rcon' => [ // Настройки rcon
            'ip' => 'localhost',
            'port' => '25565',
            'password' => 'secret'
        ],

        'server' => [
            'ip' => '192.168.1.1:25565'
        ],

        'links' => [
            'vk' => 'https://vk.com/group',
            'support' => 'https://vk.com/support'
        ],
        'widget' => [
            'id' => '20003922',
        ]
    ];
}