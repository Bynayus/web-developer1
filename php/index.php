<?php
require_once __DIR__ . '/confing.php';
require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';

// değişken klasik şekilde ingilizce harf ile oluyor
// dolar işareti ile değişken tanımlanır $
// php -S 127.0.0.1:8080
// php
// $_SERVER ['REQUEST_URI']; 
if ($_SERVER ['REQUEST_URI'] == '/') {

    $HomeController = new HomeController();
    $HomeController->index();
    //require_once APP_ROOT . '/wiew/start.php';

}else if ($_SERVER ['REQUEST_URI'] == '/products') {
    //require_once APP_ROOT . '/wiew/products.php';
    $ProductContoller=new ProductController;
    $ProductContoller ->products();
}else{
    require_once APP_ROOT . '/wiew/404.php';
}