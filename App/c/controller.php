<?php
namespace App\c;

class controller{
    function hien(){
        include('./App/v/hien.php');
    }
    function sum(){
        if(isset($_POST['soa'])&&isset($_POST['sob'])){
            $a=$_POST['soa'];
            $b=$_POST['sob'];
             $c=$a+$b;
        }
        include('./App/v/trang2.php');
       
    }
}
?>