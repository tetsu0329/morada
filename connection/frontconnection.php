<?php
$sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
$sqlselectcontact = mysqli_query($conn,"SELECT * FROM contacttable WHERE id='1'");
$sqlselectproduct = mysqli_query($conn,"SELECT * FROM producttbl");
$sqlselectslider = mysqli_query($conn,"SELECT * FROM slidertable");
$sqlproduct = mysqli_query($conn,"SELECT * FROM producttbl ORDER BY id DESC LIMIT 4");

if(isset($_POST['loginbtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM usertable WHERE emailadd = '$username' AND password = '$password'")
            or die ("failed to query database". mysqli_error());

    $numrows = mysqli_num_rows($result);
    if($numrows==1){
        echo"<script type='text/javascript'>alert('Login Successful'); 
        window.location='login.php';
        </script>";
    }
    else{
        echo"<script type='text/javascript'>alert('Incorrect username or password'); 
        window.location='login.php';
        </script>";
    }
}

if (isset($_POST['inquirybtn'])) {
        $name = $_POST['name'];
        $emailadd = $_POST['emailadd'];
        $subject = $_POST['subj'];
        $message = $_POST['msg'];
        $message2= htmlspecialchars($message,ENT_QUOTES,'UTF-8');
        date_default_timezone_set("Asia/Manila");
        $messagedate= date("M-d-Y h:i:s a");

        $result = mysqli_query($conn,"INSERT INTO inquirytable (customername, customeremail, customersubject, customermessage, messagedate, messagestatus) 
            VALUES ('$name', '$emailadd', '$subject', '$message2', '$messagedate', 'Active')")
            or die ("failed to query database". mysqli_error());
            echo"<script type='text/javascript'>alert('Inquiry has been sent successfully'); 
            window.location='contact.php';
            </script>";
    }



if(isset($_POST['nextbtn'])){
    $_SESSION['clastname'] = $_POST['lastname'];
    $_SESSION['cfirstname'] = $_POST['firstname'];
    $_SESSION['cmobilenum'] = $_POST['mobilenum'];
    $_SESSION['cemailadd'] = $_POST['email'];
    echo"<script type='text/javascript'>
            window.location='registerpage2.php';
            </script>";
}
if(isset($_POST['nextbtn2'])){
    $_SESSION['caddress'] = $_POST['address'];
    $_SESSION['ccity'] = $_POST['city'];
    $_SESSION['cbrgy'] = $_POST['brgy'];
    echo"<script type='text/javascript'>
            window.location='registerpage3.php';
            </script>";
}
if(isset($_POST['registerbtn'])){
    $lname = $_SESSION['clastname'];
    $fname = $_SESSION['cfirstname'];
    $mnumb = $_SESSION['cmobilenum'];
    $emadd = $_SESSION['cemailadd'];
    $addre = $_SESSION['caddress'];
    $cityy = $_SESSION['ccity'];
    $brgyy = $_SESSION['cbrgy'];
    $passw = $_POST['password'];
    $cpass = $_POST['confirmpw'];
    $comp = strcmp($passw, $cpass);
    if($comp == 0){
        $result = mysqli_query($conn,"INSERT INTO usertable (lname, fname, mobilenum, emailadd, street, city, barangay, password, status) 
        VALUES ('$lname', '$fname', '$mnumb', '$emadd', '$addre', '$cityy', '$brgyy', '$cpass', 'Pending')")
        or die ("failed to query database". mysqli_error());
        echo"<script type='text/javascript'>alert('Registered Successfully'); 
        window.location='login.php';
        </script>";
        session_unset();
    }
    else{
        echo"<script type='text/javascript'>alert('Password Doesnt Match'); 
        window.location='registerpage3.php';
        </script>";
    }    
}
?>