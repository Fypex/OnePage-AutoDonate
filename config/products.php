<?php

function products(){

    return [
        1 => [
            'id' => '1',
            'type' => 'privilage',
            'name' => 'VIP', // Навзание привилегии на главной странице продаж
            'price' => '10',
            'command' => 'pex user [nick] group set vip'
        ],

        2 => [
            'id' => '2',
            'type' => 'privilage',
            'name' => 'PREMIUM', // Навзание привилегии на главной странице продаж
            'price' => '30',
            'command' => 'pex user [nick] group set prem'
        ],

        3 => [
            'id' => '3',
            'type' => 'privilage',
            'name' => 'ADMIN', // Навзание привилегии на главной странице продаж
            'price' => '60',
            'command' => 'pex user [nick] group set adm'
        ],
        4 => [
            'id' => '4',
            'type' => 'privilage',
            'name' => 'GlAdmin', // Навзание привилегии на главной странице продаж
            'price' => '100',
            'command' => 'pex user [nick] group set gladmin'
        ],

        5 => [
            'id' => '5',
            'type' => 'privilage',
            'name' => 'Ultra', // Навзание привилегии на главной странице продаж
            'price' => '150',
            'command' => 'pex user [nick] group set ultra'
        ],

        6 => [
            'id' => '6',
            'type' => 'privilage',
            'name' => 'Creator', // Навзание привилегии на главной странице продаж
            'price' => '250',
            'command' => 'pex user [nick] group set creat'
        ],
        7 => [
            'id' => '7',
            'type' => 'case',
            'name' => '🔑5', // Навзание привилегии на главной странице продаж
            'price' => '59',
            'command' => 'case add [nick] donate 5'
        ],
        8 => [
            'id' => '8',
            'type' => 'case',
            'name' => '🔑15', // Навзание привилегии на главной странице продаж
            'price' => '120',
            'command' => 'case add [nick] donate 15'
        ],
        9 => [
            'id' => '9',
            'type' => 'case',
            'name' => '🔑25', // Навзание привилегии на главной странице продаж
            'price' => '199',
            'command' => 'case add [nick] donate 25'
        ],
        10 => [
            'id' => '10',
            'type' => 'case',
            'name' => '🔑50', // Навзание привилегии на главной странице продаж
            'price' => '259',
            'command' => 'case add [nick] donate 50'
        ],
    ];

}

