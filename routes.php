<?php
$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('culture/about','PagesController@aboutCulture');
$router->get('culture','PagesController@culture');
$router->get('contact','PagesController@contact');
$router->get('blogi','BlogiController@index');

$router->get('tasks','TaskController@index');
$router->post('tasks','TaskController@store');


$router->post('blogi','BlogiController@store');
$router->post('delete','BlogiController@delete');
$router->post('modify','BlogiController@update');