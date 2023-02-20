<?php
$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('culture/about','PagesController@aboutCulture');
$router->get('culture','PagesController@culture');
$router->get('contact','PagesController@contact');

$router->get('tasks','TaskController@index');
$router->post('tasks','TaskController@store');