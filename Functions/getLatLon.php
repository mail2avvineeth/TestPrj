<?php
    $tid=$_GET['tid'];
    include 'dataFetchingMethods.php';
    
    if(isset($_GET['action']) && !empty($_GET['action'])) 
    {
        $action = $_GET['action'];        
        switch ($action){
            case 'getCurrentLocation':
                echo getCurrentLocation($tid);
                break;
            case 'getLocationByDate':                   
                echo getLocationByDate($_GET['date']);
                break;
            default:
                break;
        }
    }      
?>