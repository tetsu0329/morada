<?php
    session_start();
    if(!empty($_SESSION['moradaadmin'])){
        echo "<script>window.location.replace('index.php')</script>";
    }
  include("connection/conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
    font-family: 'Century Gothic';
}

body{
  background-color: #e7d5d0;
}
input[type=text], input[type='password'], select, textarea {
    width: 40%;
    padding: 12px;
    border: 1px solid #8C6A48;
    border-radius: 4px;
    resize: vertical;
    margin: 5px;
    background-color: transparent;
}


input[type=submit] {
    background-color: #8C6A48;
    color: #222222;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 2%;
    font-weight: 600;
}

input[type=submit]:hover {
    background-color: transparent;
    border: 1px solid #8C6A48;
}

.container {
    border-radius: 5px;
    border: 1px solid black;
    width: 40%;
    padding: 2%;
    margin-top: 10%;
    margin-bottom: 2%;
}

.col-25 {
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    width: 90%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<center>
<div class="container">
  <img src="img/logo.png" style="width: 500px;">
</div>
<h5>Admin Panel</h5>
</center>

<center>

  <form action="" method="POST">
    <div class="row">
      <div class="col-75">
        <input type="text" id="username" name="uname" placeholder="Username">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="password" id="pw" name="upass" placeholder="Password">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="LOGIN" name="loginbtn">
    </div>
  </form>
</center>
</body>
</html>
<?php
    if(isset($_POST['loginbtn']))
    {

        $name = test_input($_POST['uname']);
        $pass = test_input($_POST['upass']);
        $sqllogin = mysqli_query($conn,"SELECT * FROM administrators WHERE username='$name' AND password='$pass'");
        $usercount=mysqli_num_rows($sqllogin);
        $rowlog=mysqli_fetch_assoc($sqllogin);
        if($rowlog['username']==$name && $rowlog['password']==$pass && $rowlog['status']=='Active')
        {
            if (isset($_POST['remembermecheckbox'])) 
            {
                setcookie('username', $_POST['uname'], time()+60*60*24*365);
                setcookie('password', $_POST['upass'], time()+60*60*24*365);
            } 
            else 
            {
                setcookie("username", "", time()-3600);
                setcookie("password", "", time()-3600);
            }
        $_SESSION['moradaadmin']=$rowlog['id'];
        $_SESSION['admin_type']=$rowlog['usertype'];
        $_SESSION['admin_name']=$rowlog['name'];
        echo "<script>window.location.replace('index.php')</script>";
        }
        else
        {
        echo "<script>alert('Username or Password is incorrect')</script>";
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
