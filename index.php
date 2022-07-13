<?php
require './vendor/autoload.php';
 use App\c\controller;
 use App\m\model;

 const BASE_URL = "http://localhost/mvc/App";
 $url = isset($_GET['url']) ? $_GET['url'] : "/";
 var_dump($url);
 $c=new controller();
 switch ($url) {
  
    case 'App/tinh':
        echo 'Xong r đóa';
        $c->sum();
          break;   
     case '/': 
        
         $c->hien();
            break;
    } 
    

?>