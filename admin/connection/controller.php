<?php
    $sqladmins = mysqli_query($conn,"SELECT * FROM usertable");

    if (isset($_POST['adduser'])) {
        $lname = $_POST['lastname'];
        $fname = $_POST['firstname'];
        $mnumb = $_POST['mobilenum'];
        $emadd = $_POST['emailadd'];
        $addre = $_POST['address'];
        $cityy = $_POST['city'];
        $brgyy = $_POST['brgy'];
        $passw = $_POST['pw'];
        $cpass = $_POST['confirmpw'];
        $comp = strcmp($passw, $cpass);
        if($comp == 0){
            $result = mysqli_query($conn,"INSERT INTO usertable (lname, fname, mobilenum, emailadd, street, city, barangay, password, status) 
            VALUES ('$lname', '$fname', '$mnumb', '$emadd', '$addre', '$cityy', '$brgyy', '$cpass', 'Active')")
            or die ("failed to query database". mysqli_error());
            echo"<script type='text/javascript'>alert('New User Added Successfully'); 
            window.location='useracc.php';
            </script>";
        }
        else{
            echo"<script type='text/javascript'>alert('Password Doesnt Match'); 
            window.location='useracc.php';
            </script>";
        }

    }
?>