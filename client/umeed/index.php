<?php

//session_unset();
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
    <link href="styles/style.css" rel = "stylesheet">
         <title>Login Page</title>
    </head>
    <body>

        <header>
            <div className = "header">
                <img alt="logo" src ="./pics/ulogo.jpeg" id="logo"/>
                <hr id="color" />
                </div>
        </header>
    
       
        <form class ="form" method="POST">
            <h3 id="title">Log in</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <div class ="form-group">
                <label for ="dropdown">Log in as</label>
            <select name="type" class="form-control">
                <option>User</option>
                <option>Manager</option>
                <option>Admin</option>
              </select>
              </div>
            <button name="submit" type="submit" class="btn btn-light" id="btn">Submit</button>
          </form>
          
          


    </body>
    </html>




<?php

if (isset($_POST["submit"])){
$fullname = $_POST["name"];
$password = $_POST["pass"];
$type = $_POST["type"];

echo $type;

if ($type == "User" || $type == "Manager") {
    $mysqlquery = "select uid from user where full_name = '$fullname' and password = '$password' and type = '$type'";

    $result = $conn->query($mysqlquery);

    if ($result === false) {
        die(mysqli_error($conn));
    }

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION["uid"] = $row["uid"];
        echo "Successful";
    } else {
        //user does not exist
        echo "not exist";
        session_unset();
    }
} else {
    $query = "select id from admin where full_name = '$fullname' and password = '$password'";
    
    $result = $conn->query($query);

    if ($result === false) {
        die(mysqli_error($conn));
    }

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        echo "Successful";
    } else {
        //user does not exist
        echo "not exist";
        session_unset();
    }

}
$conn->close();
}
?>