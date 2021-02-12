<?php
require "php/script/db_functions.php";
require "config.php";

include ('php/header.php');

if (isset($_GET['page'])){

   $page = $_GET['page'];

   switch ($page) {
       case 'home' : include ('php/home.php'); break;
       case 'profil' : include ('php/user.php'); break;
       default : include ('php/home.php'); break;
   }
}else{
       include ('php/home.php');
   }

include ('php/footer.php');


?>