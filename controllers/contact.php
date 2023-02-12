<?php

$contacts = App::get('database')->selectAll('contacts');



require_once 'views/contact.view.php';