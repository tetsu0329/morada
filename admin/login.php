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
input[type=text], select, textarea {
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

  <form action="/action_page.php">
    <div class="row">
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="Username">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" id="pw" name="pw" placeholder="Password">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="LOGIN">
    </div>
  </form>
</center>
</body>
</html>
