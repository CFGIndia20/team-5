<?php

session_unset();
session_start();

require "dbconn.php";
?>

<!DOCTYPE html>
<html lan = "en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="style.css" rel = "stylesheet">
         <title>Sign Up Page</title>
    </head>
    <body>
        <header>
            <div className = "header">
                <img alt="logo"  src="https://static.wixstatic.com/media/324d95_7bf675816060483297fb9fc415410e98~mv2.jpg/v1/crop/x_220,y_146,w_535,h_316/fill/w_253,h_149,al_c,q_80,usm_0.66_1.00_0.01/umeed%203_Final%20logo-01%5B5159%5D%20smallest.webp" id="logo"/>
                <hr id="color" />
                </div>
        </header>


        <form class ="form" method="POST">
            <h3 id="title">Sign Up</h3>
            <div class="form-group" >
              <label for="exampleInputEmail1">Full Name</label><input type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="exampleInputRegion1">Region</label>
              <select class="form-control">
                <option>Kolkata</option>
                <option>Mumbai</option>
                <option>Delhi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mobile Number</label>
              <input type="Number" class="form-control" id="exampleInputNumber1" placeholder="Enter Number">
            </div><br>
            <div>
            <button type="button" class="btn btn-light" id="btn">Submit</button></div>
          </form>




    </body>
    </html>

    

<?php

$password = $_POST[""];
$fullname = $_POST[""];
$pno = $_POST[""];
$region = $_POST[""];

$mysqlquery = "insert into user(fullname, password, pno, region) values ('{$fullname}', '{$password}', '{$pno}', '{$region}')";

if ($conn->query($mysqlquery) == TRUE) {
    $_SESSION["uid"] = $uid;
}

$conn->close();

?>