<?php

    //dashboard number
    $sqlinquirycount = mysqli_query($conn,"SELECT * FROM inquirytable");
    $inquirycount = mysqli_num_rows($sqlinquirycount);

    $sqlinquirycount2 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Active'");
    $inqunread = mysqli_num_rows($sqlinquirycount2);

    $sqlinquirycount3 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Read'");
    $inqread = mysqli_num_rows($sqlinquirycount3);

    $sqlordercount = mysqli_query($conn,"SELECT * FROM transactiontable");
    $ordercount = mysqli_num_rows($sqlordercount);

    $sqlusercount = mysqli_query($conn,"SELECT * FROM usertable");
    $usercount = mysqli_num_rows($sqlusercount);

    $sqlproductcount = mysqli_query($conn,"SELECT * FROM producttbl");
    $productcount = mysqli_num_rows($sqlproductcount);



    $sqladmins = mysqli_query($conn,"SELECT * FROM usertable");
    $sqlinquiry = mysqli_query($conn,"SELECT * FROM inquirytable");
    $sqlcontact = mysqli_query($conn,"SELECT * FROM contacttable WHERE id = '1'");


    $sqlselectslider = mysqli_query($conn,"SELECT * FROM slidertable WHERE id = '1'");
    $sqlselectslider2 = mysqli_query($conn,"SELECT * FROM slidertable WHERE id = '2'");
    $sqlselectslider3 = mysqli_query($conn,"SELECT * FROM slidertable WHERE id = '3'");

    $sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
    $aboutrow=mysqli_fetch_assoc($sqlselectabout);

    $sqlselectgallery = mysqli_query($conn,"SELECT * FROM gallerytbl");

    $sqlcategorycount = mysqli_query($conn,"SELECT * FROM categorytbl");

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
   if (isset($_POST['updtmissionbtn'])) {
    $aboutcontent=$_POST['aboutmission'];

    $sqlaboutupdt = mysqli_query($conn,"UPDATE abouttable SET mission='$aboutcontent' WHERE id='1'");

    if ($sqlaboutupdt) {
       
           echo "<script>alert('Content of mission has been updated');
                   window.location='cms_about.php';</script>";

    }

    else{
           echo "<script>alert('unable to update mission content')
                window.location='cms_about.php';</script>";
    }
}
if (isset($_POST['updtvisionbtn'])) {
    $aboutcontent=$_POST['aboutvision'];

    $sqlaboutupdt = mysqli_query($conn,"UPDATE abouttable SET vision='$aboutcontent' WHERE id='1'");

    if ($sqlaboutupdt) {
       
           echo "<script>alert('Content of vision has been updated');
                   window.location='cms_about.php';</script>";

    }

    else{
           echo "<script>alert('unable to update vision content')
                window.location='cms_about.php';</script>";
    }
}
   
if(isset($_POST['sliderbtn1'])){
    $target_dir = "../slider/";
    $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider1"]["name"]);

    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["slider1"]["tmp_name"]);
    if ($check == false)
        {
        	echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if ($_FILES["slider1"]["size"] > 10000000) 
        {
        	echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
        	$imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        else 
        {
            if (move_uploaded_file($_FILES["slider1"]["tmp_name"], $target_file))
            {
              $result = mysqli_query($conn,"UPDATE slidertable SET sliderpicture='$target_file' WHERE id = '1'")
                or die ("failed to query database". mysql_error());
            echo"<script type='text/javascript'>alert('Slider Updated Successfully'); 
            window.location.replace('cms_homepage.php');
              </script>";
            } 
            else 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                </script>";
            }
        }

   }
if(isset($_POST['sliderbtn2'])){
    $target_dir = "../slider/";
    $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider2"]["name"]);

    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["slider2"]["tmp_name"]);
    if ($check == false)
        {
        	echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if ($_FILES["slider2"]["size"] > 10000000) 
        {
        	echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
        	$imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        else 
        {
            if (move_uploaded_file($_FILES["slider2"]["tmp_name"], $target_file))
            {
              $result = mysqli_query($conn,"UPDATE slidertable SET sliderpicture='$target_file' WHERE id = '2'")
                or die ("failed to query database". mysql_error());
            echo"<script type='text/javascript'>alert('Slider Updated Successfully'); 
            window.location.replace('cms_homepage.php');
              </script>";
            } 
            else 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                </script>";
            }
        }

   }
if(isset($_POST['sliderbtn3'])){
    $target_dir = "../slider/";
    $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider3"]["name"]);

    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["slider3"]["tmp_name"]);
    if ($check == false)
        {
        	echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if ($_FILES["slider3"]["size"] > 10000000) 
        {
        	echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
        	$imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            window.location.replace('cms_homepage.php');
            </script>";
            $uploadOk = 0;
        }
        else 
        {
            if (move_uploaded_file($_FILES["slider3"]["tmp_name"], $target_file))
            {
              $result = mysqli_query($conn,"UPDATE slidertable SET sliderpicture='$target_file' WHERE id = '3'")
                or die ("failed to query database". mysql_error());
            echo"<script type='text/javascript'>alert('Slider Updated Successfully'); 
            window.location.replace('cms_homepage.php');
              </script>";
            } 
            else 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                </script>";
            }
        }

   }
   if (isset($_POST['contactbtn'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];

        $result = mysqli_query($conn,"UPDATE contacttable SET name = '$name', address = '$address', email = '$email', 
        contactnumber = '$phone', facebook = '$facebook', instagram = '$instagram', twitter = '$twitter'")
            or die ("failed to query database". mysqli_error());
            echo"<script type='text/javascript'>alert('Contact Information updated successfully'); 
            window.location='cms_contact.php';
            </script>";
    }
    if(isset($_POST['gallerybtn'])){
        $target_dir = "../gallery/";
        $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["gallery"]["name"]);

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["gallery"]["tmp_name"]);
        if ($check == false)
            {
                echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                window.location.replace('cms_gallery.php');
                </script>";
                $uploadOk = 0;
            }
            if ($_FILES["slider3"]["size"] > 10000000) 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                window.location.replace('cms_gallery.php');
                </script>";
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                window.location.replace('cms_gallery.php');
                </script>";
                $uploadOk = 0;
            }
            else 
            {
                if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $target_file))
                {
                $result = mysqli_query($conn,"INSERT INTO gallerytbl (photopath) VALUES ('$target_file')")
                    or die ("failed to query database". mysql_error());
                echo"<script type='text/javascript'>alert('Picture added successfully in gallery'); 
                window.location.replace('cms_gallery.php');
                </script>";
                } 
                else 
                {
                    echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                    </script>";
                }
            }
    }
    if (isset($_POST['productbtn'])) {
        $pcode = $_POST["prodcode"];
        $pname = $_POST["prodname"];
        $pcat = $_POST["option"];
        $pclass = $_POST["option2"];
        $pdesc = $_POST["description"];
        $psize = $_POST["wid"]."x".$_POST["hei"];
        $pprice = $_POST["price"];
        $pquan = $_POST["quantity"];
        $target_dir = "../products/";
        $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["product"]["name"]);

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["product"]["tmp_name"]);
        if ($check == false)
            {
                echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                window.location.replace('cms_products.php');
                </script>";
                $uploadOk = 0;
            }
            if ($_FILES["slider3"]["size"] > 10000000) 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                window.location.replace('cms_products.php');
                </script>";
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                window.location.replace('cms_products.php');
                </script>";
                $uploadOk = 0;
            }
            else 
            {
                if (move_uploaded_file($_FILES["product"]["tmp_name"], $target_file))
                {
                $result = mysqli_query($conn,"INSERT INTO producttbl (productcode, productname, productcat, productclass, productdesc, itemsize, itemprice, quantity, productimage) 
                                                              VALUES ('$pcode','$pname','$pcat','$pclass','$pdesc', '$psize', '$pprice', '$pquan','$target_file')")
                    or die ("failed to query database". mysql_error());
                echo"<script type='text/javascript'>alert('Product Added Succesfully'); 
                window.location.replace('cms_products.php');
                </script>";
                } 
                else 
                {
                    echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                    </script>";
                }
            }
    }

?>