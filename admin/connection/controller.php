<?php

    //dashboard number
    $sqlinquirycount = mysqli_query($conn,"SELECT * FROM inquirytable");
    $inquirycount = mysqli_num_rows($sqlinquirycount);

    $sqlordercount = mysqli_query($conn,"SELECT * FROM ordertable");
    $ordercount = mysqli_num_rows($sqlordercount);

    $sqlusercount = mysqli_query($conn,"SELECT * FROM usertable");
    $usercount = mysqli_num_rows($sqlusercount);

    $sqlproductcount = mysqli_query($conn,"SELECT * FROM producttbl");
    $productcount = mysqli_num_rows($sqlproductcount);



    $sqladmins = mysqli_query($conn,"SELECT * FROM usertable");
    $sqlinquiry = mysqli_query($conn,"SELECT * FROM inquirytable");

    $sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
    $aboutrow=mysqli_fetch_assoc($sqlselectabout);

    //add user customer
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

    //edit user customer
    if(isset($_POST['edituser'])){
        $userid = $_GET['ID'];
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
            $result = mysqli_query($conn,"UPDATE usertable SET lname = '$lname', fname = '$fname', 
            mobilenum = '$mnumb', emailadd = '$emadd', street = '$addre', city = '$cityy', barangay = '$brgyy', password = '$passw', 
            status = 'Active' WHERE id = '$userid'")
            or die ("failed to query database". mysqli_error());
            echo"<script type='text/javascript'>alert('User Updated Successfully'); 
            window.location='useracc.php';
            </script>";
        }
        else{
            echo"<script type='text/javascript'>alert('Password Doesnt Match'); 
            window.location='useracc.php';
            </script>";
        }
    }

    //update about 
    
    if (isset($_POST['updtaboutbtn'])) {
        $aboutcontent=$_POST['aboutcontent'];

        $sqlaboutupdt = mysqli_query($conn,"UPDATE abouttable SET content='$aboutcontent' WHERE id='1'");

        if ($sqlaboutupdt) {
           
               echo "<script>alert('Content of about has been updated');
                       window.location='cms_about.php';</script>";

        }

        else{
               echo "<script>alert('unable to update about content')
                    window.location='cms_about.php';</script>";
        }
   }
?>