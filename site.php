<?php 

use \hcodebr\Page;
use \hcodebr\Model\Product;

$app->get('/', function() {

$products = Product::listALL();

$page = new Page();

$page->setTpl("index", [
    'products'=>Product::checkList($products)
]);

});

 ?>