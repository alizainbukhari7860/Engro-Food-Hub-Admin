<?php 
session_start();
ob_start();
if(isset($_SESSION['admin_id'])){
    unset($_SESSION['admin_id']);
            header("Location: index.php");
            ob_end_flush();
        }
?>