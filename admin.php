<?php
session_start();
require('dbcon.php');

?>



<!DOCTYPE html>
<html lan = "en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="styles/admin.css" rel = "stylesheet">
         <title>Admin Page</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" id="title">Umeed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="./admin.html" id="move">Users<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="./man.html">Managers</a>
          </div>
        </div>
      </nav>  
      
<form method="POST">
<button type="submit" class="btn btn-primary" name="w_comp">View Weekly Compensation</button>
<button type="submit" class="btn btn-secondary" name="sess">View Sessions</button>
<button type="submit" class="btn btn-success" name="m_comp">View Monthly Compensation</button>
<button type="submit" class="btn btn-primary" name="hours">View Weekly Working Hours</button>    
    </form>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Value</th>
    </tr>
  </thead>
  <?php
    if (isset($_POST["w_comp"])) {
      $query = "select full_name, w_hours from user where type = 'user' order by w_hours limit 10";
    if ($con->query($query) == TRUE) {
        $result = $con->query($query);
        if ($result === false) { die(mysqli_error($con)); }
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $row["full_name"] ?></td>
      <td><?php echo $row["w_hours"]?></td>
    </tr>


<?php
            }
            // add html
        }
    }
    }

    if (isset($_POST["sess"])) {
      $query = "select full_name, w_session from user where type = 'user' order by w_session limit 10";
    if ($con->query($query) == TRUE) {
        $result = $con->query($query);
        if ($result === false) { die(mysqli_error($con)); }
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
              ?>
                  <tr>
                    <td><?php echo $row["full_name"] ?></td>
                    <td><?php echo $row["w_session"]?></td>
                  </tr>
              
              
              <?php
            }
            // add html
        }
    }
    }


    if (isset($_POST["m_comp"])) {
      $query = "select full_name, m_comp from user where type = 'user' order by m_comp limit 10";
    if ($con->query($query) == TRUE) {
        $result = $con->query($query);
        if ($result === false) { die(mysqli_error($con)); }
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
            // add html
            ?>
                <tr>
                  <td><?php echo $row["full_name"] ?></td>
                  <td><?php echo $row["m_comp"]?></td>
                </tr>
            
            
            <?php
            }

        }
      }
    }


    if (isset($_POST["hours"])) {
      $query = "select full_name, w_hours from user where type = 'user' order by w_hours limit 10";
    if ($con->query($query) == TRUE) {
        $result = $con->query($query);
        if ($result === false) { die(mysqli_error($con)); }
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $row["full_name"] ?></td>
                  <td><?php echo $row["w_hours"]?></td>
                </tr>
            
            
            <?php
            }
            // add html
        }
    }
    }
    
    ?>
 
</table>
     
</body>
</html>

