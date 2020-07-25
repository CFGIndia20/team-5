<?php
session_start();
require('dbcon.php');
$reg = "SELECT region from user where uid=2";
$qry1 = mysqli_query($con,$reg);
if($qry1 == false)
{
    echo 'failed';
}
$row = mysqli_num_rows($qry1);
$data1 = mysqli_fetch_assoc($qry1);
$region = $data1['region'];
$qry = "SELECT `uid`, `full_name` FROM `user` WHERE region='$region'";
$qry2 = mysqli_query($con,$qry);
if($qry2 == false)
{
    echo 'failed';
}



?>

<!DOCTYPE html>
<html lan = "en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="styles/manager.css" rel = "stylesheet">
         <title>Manager Page</title>
</head>
<body>
    <div className = "header">
        <img alt="logo" src ="./pics/ulogo.jpeg" id="logo"/>
        <hr id="color" />
        </div>
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="./pics/pic0.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./pics/pic1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./pics/pic5.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ASSIGN
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">


<!-- assign section-->

<?php
                  if(mysqli_num_rows($qry2)>0)
                  {
                      $data= mysqli_fetch_assoc($qry2);
                  ?>
                    <div class="card-body">
                        <div class = "user">
                            <div class ="row">
                                <div class ="col-sm-3">
                                  <span name="id"><?php echo  $data["uid"]; ?></span>
                                    <span id="details"><?php echo  $data["full_name"]; ?></span>
                                </div>
                                <div class="col-sm-3">
                                    <span id="details" name="noh">Number of hours:20</span>
                                </div>
                                <div class ="col-sm-3">
                                    <input type="text" placeholder="How many.."/ name="wtd">
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2" name="product">
                                  <option value="diya">Diya</option>
                                  <option value="lamp">Lamp</option>
                                  <option value="mate">Mate</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light" id="btn" name="assign">Submit</button>
                    </div>

                    <?php
                  }
?>

                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        APPROVE
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    
                  
                  
                  <div class="card-body">
                                <div class = "user">
                                    <div class ="row">
                                        <div class ="col sm-3">
                                            <span id="details"><input type="text" id="name" placeholder="name"/></span>
                                        </div>
                                        <div class="col sm-3">
                                            <img alt="handicraft" src="./pics/han1.jpg" id="han"/>
                                        </div>
                                        <div class ="col sm-3">
                                            <button type="button" class="btn btn-light" id="btn">YES</button>
                                            <button type="button" class="btn btn-light" id="btn">NO</button>
                                        </div>
                                        <div class="col sm-3">
                                            <input type="text" placeholder="Enter Comment.." id="Comment"/>
                                        </div>
                                    </div>
                                </div>
                                <div class = "user">
                                    <div class ="row">
                                        <div class ="col sm-3">
                                            <span id="details"><input type ="text" id="name" placeholder="Name"/></span>
                                        </div>
                                        <div class="col sm-3">
                                            <img alt="handicraft" src="./pics/han2.jpg" id="han"/>
                                        </div>
                                        <div class ="col sm-3">
                                            <button type="button" class="btn btn-light" id="btn">YES</button>
                                            <button type="button" class="btn btn-light" id="btn">NO</button>
                                        </div>
                                        <div class="col sm-3">
                                            <input type="text" placeholder="Enter Comment.." id="Comment"/>
                                        </div>
                                    </div>
                                </div>
                                <div class = "user">
                                    <div class ="row">
                                        <div class ="col sm-3">
                                            <span id="details"><input type ="text" id="name" placeholder="Name"/></span>
                                        </div>
                                        <div class="col sm-3">
                                            <img alt="handicraft" src="./pics/han3.jpg" id="han"/>
                                        </div>
                                        <div class ="col sm-3">
                                            <button type="button" class="btn btn-light" id="btn">YES</button>
                                            <button type="button" class="btn btn-light" id="btn">NO</button>
                                        </div>
                                        <div class="col sm-3">
                                            <input type="text" placeholder="Enter Comment.." id="Comment"/>
                                        </div>
                                    </div>
                                </div>
                                <div class = "user">
                                    <div class ="row">
                                        <div class ="col sm-3">
                                            <span id="details"><input type ="text" id="name" placeholder="Name"/></span>
                                        </div>
                                        <div class="col sm-3">
                                            <img alt="handicraft" src="./pics/han4.jpg" id="han"/>
                                        </div>
                                        <div class ="col sm-3">
                                            <button type="button" class="btn btn-light" id="btn">YES</button>
                                            <button type="button" class="btn btn-light" id="btn">NO</button>
                                        </div>
                                        <div class="col sm-3">
                                            <input type="text" placeholder="Enter Comment.." id="Comment"/>
                                        </div>
                                    </div>
                                </div>
                                
                  </div>



                </div>
                </div>
                </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        COMPENSATION
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <input type="text" placeholder="Username.." id="Username"/>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="Sessions.." id="Sessions"/>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="Productive hours.." id="Productive"/>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="Weekly Compensation.." id="Compensation"/>
                        </div> 
                    </div>
                    <button type="button" class="btn btn-light" id="btn">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
     

      
    
</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
<?php

                }
if(isset($_POST["assign"]))
{
    $hm = $_POST["wtd"];
    $product = $_POST["product"];
    $id = $_POST["id"];
    
    $qry = "UPDATE `production` SET `p_task`='$product',`assigned`='$hm' WHERE id= '$id' ";
    $run = mysqli_query($con,$qry);
    if ($run == true)
    {
        ?>
<script>alert('Assigned');</script>
<?php
    }   
}
?>