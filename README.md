### Demo
  [http://donate.lightdev.ru/](http://donate.lightdev.ru/)
  
# OnePage AutoDonate
---
# Installation!

### Archive
```sh
  - Download archive
  - Unzip to the right place
  - [http://files.ztgamers.com.ua/?dl=c6a7f53ed197a206b38b0e42476fd5bb](Download)
```
---
### Git!
```sh
git clone https://github.com/Fypex/OnePage-AutoDonate.git
composer install
```

# Settings

### Products.php

    1 => [
        'id' => '1',
        'name' => 'VIP', 
        'pex' => 'vip',
        'price' => '100'
    ],

### Settings.php

    <Site Settings>
    'site' => [  
        'title' => 'GameClub',
        'keywords' => '',
        'description' => ''
    ],
    <FreeKassa Settings>
    'freekassa' => [
        'key' => 'merchant_secret',
        'shop_id' => 'merchant_id'
    ],
    <Rcon Settings>
    'rcon' => [
        'ip' => 'localhost',
        'port' => '25565',
        'password' => 'secret'
    ],
    <Server ip in index page>
    'server' => [
        'ip' => '192.168.1.1:25565'
    ],
    <Links in the menu>
    'links' => [
        'vk' => 'https://vk.com/group',
        'support' => 'https://vk.com/support'
    ],
    <Vk Widget / ID its ID vk group>
    'widget' => [
        'id' => '20003922',
    ]
    <Links in menu contacts>
    'contacts' => [
        'mail' => '',
        'admin' => '',
        'group-server' => ''
    ]
