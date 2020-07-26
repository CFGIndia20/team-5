<?php

session_unset();
session_start();

require "dbcon.php";
?>

<!DOCTYPE html>
<html lan = "en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="styles/style.css" rel = "stylesheet">
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
              <label for="exampleInputEmail1">Full Name</label>
              <input name="name"type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="exampleInputRegion1">Region</label>
              <select name="region" class="form-control">
                <option>Kolkata</option>
                <option>Mumbai</option>
                <option>Delhi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mobile Number</label>
              <input name="pno" type="Number" class="form-control" id="exampleInputNumber1" placeholder="Enter Number">
            </div><br>
            <div>
            <button name="submit" type="submit" class="btn btn-light" id="btn" onclick =goToNewPage()>Submit</button></div>
          </form>
    </body>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
     function goToNewPage(){
      var url = './signin.php';
        window.location = url;
     }

    </script>
    </html>
    
    

<?php

if (isset($_POST["submit"])){

$password = $_POST["pass"];
$fullname = $_POST["name"];
$pno = $_POST["pno"];
$region = $_POST["region"];

echo $password;
$mysqlquery = "insert into user(full_name, password, pno, region) values ('{$fullname}', '{$password}', '{$pno}', '{$region}')";

if ($conn->query($mysqlquery) == TRUE) {
    $query = "select uid from user where full_name = '$fullname' and password = '$password' and pno = '$pno' and region = '$region'";
    $result = $conn->query($query);
    if ($result === false) { die(mysqli_error($conn)); }
    if($result->num_rows === 1){
      $row = $result->fetch_assoc();
      $_SESSION["uid"] = $row["uid"];
    }
    

}

$conn->close();
}

?>