<?php

function products(){

    return [
        1 => [
            'name' => 'VIP', // Навзание привилегии на главной странице продаж
            'pex' => 'vip', // Привилегия в permissions будет указано в команде при выдачи  /pex user ИМЯ group set vip
            'price' => '100'
        ],

        2 => [
            'name' => 'PREMIUM', // Навзание привилегии на главной странице продаж
            'pex' => 'prem', // Привилегия в permissions будет указано в команде при выдачи  /pex user ИМЯ group set prem
            'price' => '150'
        ],

        3 => [
            'name' => 'ADMIN', // Навзание привилегии на главной странице продаж
            'pex' => 'adm', // Привилегия в permissions будет указано в команде при выдачи  /pex user ИМЯ group set adm
            'price' => '200'// Цена привилегии что заплатит игрок
        ],
    ];

}

