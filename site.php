<?php 

use \hcode\PageAdmin;

$app->get('/', function() {

$page = new Page();

$page->setTpl("index");

});

 ?>