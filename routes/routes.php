<?php 
use Controllers\BuyProductsController as BuyProduct;
Flight::route('/', function(){
	Flight::render('index', array(
	    'title' => settings()['site']['title'],
      'description' => settings()['site']['description'],
      'keywords' => settings()['site']['keywords'],
      'server_ip' => settings()['server']['ip'],
      'links' => settings()['links'],
      'widget' => settings()['widget'],
      'prodcuts' => products(),
  ));
});

Flight::route('POST /order', function(){
    BuyProduct::order($_POST['name'],$_POST['id']);
});