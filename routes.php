<?php
$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('about/culture','PagesController@aboutculture');
$router->get('culture','PagesController@culture');
$router->get('contact','PagesController@contact');

$router->post('task','controllers/add-task.php');