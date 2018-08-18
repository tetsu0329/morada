<?php
	session_start();
	include('connection/conn.php');
	include('connection/controller.php');
	if(empty($_SESSION['moradaadmin'])){
        echo "<script>window.location.replace('login.php')</script>";
    }
?>