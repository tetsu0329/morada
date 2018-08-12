<?php
    $sqlinquirycount = mysqli_query($conn,"SELECT * FROM inquirytable");
    $inquirycount = mysqli_num_rows($sqlinquirycount);

    $sqlorder = mysqli_query($conn,"SELECT * FROM ordertable");
    $ordercount = mysqli_num_rows($sqlorder);

    $sqladmins = mysqli_query($conn,"SELECT * FROM usertable");
    $sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
    $aboutrow=mysqli_fetch_assoc($sqlselectabout);

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