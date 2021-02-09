<?php
require_once "db_functions.php";
require_once "../../config.php";


if(isset($_POST['action'])){
    switch($_POST['action']){

        case 'tech':
            $result = db_select("SELECT * FROM user WHERE Categories = 'Tech'");

            echo $result;
            break;
        
        case 'crea':

        $result = db_select("SELECT * FROM user WHERE Categories = 'Créa'");

        echo $result;
        break;
        

}
}

?>