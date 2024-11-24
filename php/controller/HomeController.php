<?php 
//class tanımlama
class HomeController{
    //method tanımlama
    function index(){
        
        $title='Anasayfa';

        
        require_once APP_ROOT . '/wiew/start.php';
        //print 'BEN HOME CONTROLLER İNDEX METHODU';
    }
}