<?php
session_start();
include('dbcon.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <form method="POST" action="admin.php">
<button type="submit" class="btn btn-primary" name="view_manager">Primary</button>
<button type="submit" class="btn btn-secondary" name="view_user">Secondary</button>
<button type="submitS" class="btn btn-success" name="show_mcomp">Success</button>
<!--<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>-->
          </form>
    
  </body>
</html>

<?php
if(isset($_POST["view_manager"]))
{
  $qry = "SELECT * FROM `user` WHERE type = 'manager' ";
  $run = mysqli_query($con,$qry);
    if($run == true)
    {
        echo 'success';
    }
    else
    {
        echo 'fail';
    }
     if(mysqli_num_rows($run)>0)
     {
         $data= mysqli_fetch_assoc($run);
        ?>
 <table style="background-color:#000;color:#fff;width:80%;margin-top:12px;" align="center" border="1">
        <tr>
              <th>Name</th>
              <th>Phone Number </th>
        </tr>
     
    <tr>
     <td><?php echo $data['full_name']; ?> </td>
      <td><?php echo $data['pno']; ?> </td>
    </tr>
    
</table>
<?php
     }
     else{
        echo"<script>alert('No user found.');</script>"; 
     } 
}
if(isset($_POST["view_user"]))
{
  $qry = "SELECT * FROM `user` WHERE type = 'user' ";
  $run = mysqli_query($con,$qry);
    if($run == true)
    {
        echo 'success';
    }
    else
    {
        echo 'fail';
    }
     if(mysqli_num_rows($run)>0)
     {
         $data= mysqli_fetch_assoc($run);
        ?>
 <table style="background-color:#000;color:#fff;width:80%;margin-top:12px;" align="center" border="1">
        <tr>
              <th>Name</th>
              <th>Phone Number </th>
        </tr>
     
    <tr>
     <td><?php echo $data['full_name']; ?> </td>
      <td><?php echo $data['pno']; ?> </td>
    </tr>
    
</table>
<?php
     }
     else{
        echo"<script>alert('No user found.');</script>"; 
     } 
}
if(isset($_POST["show_mcomp"]))
{
  $qry = "SELECT * FROM `user` ";
  $run = mysqli_query($con,$qry);
     if(mysqli_num_rows($run)>0)
     {
         $data= mysqli_fetch_assoc($run);
        ?>
 <table style="background-color:#000;color:#fff;width:80%;margin-top:12px;" align="center" border="1">
        <tr>
              <th>Weekly Compensation</th>
              <th>Monthly Compensation </th>
        </tr>
     
    <tr>
     <td><?php echo $data['w_comp']; ?> </td>
      <td><?php echo $data['m_comp']; ?> </td>
    </tr>
    
</table>
<?php
     }
     else{
        echo"<script>alert('No user found.');</script>"; 
     } 
}
?>

