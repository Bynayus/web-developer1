<?php
class ProductController{
    //method tanımlama
    function products(){
        $title='Ürünler';
        
        require_once APP_ROOT . '/wiew/products.php';
        //print 'BEN HOME CONTROLLER İNDEX METHODU';
    }
}