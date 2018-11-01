<?php 
use Controllers\BuyProductsController as BuyProduct;
use Controllers\PayFreeKassaController as PayFreeKassa;


Flight::route('/', function(){
	Flight::render('index', array(
	    'title' => settings()['site']['title'],
      'description' => settings()['site']['description'],
      'keywords' => settings()['site']['keywords'],
      'server_ip' => settings()['server']['ip'],
      'links' => settings()['links'],
      'widget' => settings()['widget'],
      'contacts' => settings()['contacts'],
      'prodcuts' => products(),
  ));
});

Flight::route('POST /order', function(){
    BuyProduct::order($_POST['name'],$_POST['id']);
});

Flight::route('POST /pay/success', function(){
    PayFreeKassa::pay($_POST);
});

Flight::route('/success', function(){
    Flight::render('success');
});
Flight::route('/error', function(){
    Flight::render('error');
});