<?php
require_once "db_functions.php";
require_once "../../config.php";


if(isset($_POST['action'])){
    switch($_POST['action']){

        case 'all':
            $result = db_select("SELECT * FROM user ");

            if($result){
                $response = "true";
            }else{
                $response = "false";
            }

            echo $response;
            break;

        case 'tech':
            $result = db_select("SELECT * FROM user WHERE Categories = 'Tech'");

            if($result){
                $response = "true";
            }else{
                $response = "false";
            }

            echo $response;
            break;
        
        case 'crea':

            $result = db_select("SELECT * FROM user WHERE Categories = 'Créa'");

            if($result){
                $response = "true";
            }else{
                $response = "false";
            }

            echo $response;
            break;
        

    }
}

?>