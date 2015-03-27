<?php 
    require_once("../includes/session.php");
    require_once("../includes/login_connect.php");
    require_once("../includes/login_functions.php");
        
    session_start();
    if(session_destroy()) {
    header("location: home_index.php");
    }
    
?>
