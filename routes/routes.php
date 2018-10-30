<?php 

Flight::route('/', function(){
	Flight::render('index', array('title' => 'Flight'));
});
Flight::route('/temp', function(){
    $arr = array(
        ['text' => 'game'],
        ['text2' => 'game2'],
    );
    new Controllers\TempController(uniqid(),$arr);
});
Flight::route('/temp/read', function(){
    $arr = Controllers\TempController::openContent('5bd87e8f383c9');

    $data = json_decode($arr,true);
    var_dump($data);
});