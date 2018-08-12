<?php
	$conn = mysqli_connect("localhost", "root", "", "moradadb");
    function terminatePage($errorMessage, $redirect = false) {
        if($redirect)
            
        die ('ERROR: '.$errorMessage);
        exit;
    }
?>