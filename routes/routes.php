<?php 

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