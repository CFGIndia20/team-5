<?php
session_start();
include('dbcon.php');
$qry = "SELECT * from learning where uid=2";
$run = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($run);
$hwname = $data["l_task"];
$id = $data["uid"];//$_SESSION
$id = 3;
$qq = "select comment from images where uid='$id' and checked=1";
$run1 = mysqli_query($con, $qq);
if ($run1 == true) {
	$data1 = mysqli_fetch_assoc($run1);
	$comm = $data1["comment"];
} else {
	echo 'failed';
}


?>
<!DOCTYPE HTML>
<html lang="en">

	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<title>User</title>
		<meta name="description" content="" />
		<meta name="author" content="admin" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 

		<!-- <link rel="shortcut icon" href="images/favicon.png" alt=""/> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
		<link href="css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/animate.css" media="all" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/responsive.css" />

	</head>

	<body>
		<!-- header -->
		<header>
			<div class="hdr-inn py-4">
				<div class="container-fluid">
					<div class="d-sm-flex justify-content-sm-between align-items-center">
						<div class="logo-sec">
                        	<a class="logo" href="index.html"> <img src="https://static.wixstatic.com/media/324d95_7bf675816060483297fb9fc415410e98~mv2.jpg/v1/crop/x_220,y_146,w_535,h_316/fill/w_253,h_149,al_c,q_80,usm_0.66_1.00_0.01/umeed%203_Final%20logo-01%5B5159%5D%20smallest.webp" alt="" class="img-fluid" /> </a>
						</div>
						<!-- == -->
						<div class="rght-menu right-side-menu">
							<div class="navbar-header">
								<nav class="navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
<!--									 <span class="nav-txt">Menu</span>-->
									</button>
									<div class="collapse navbar-collapse" id="navbarNavDropdown">
										<ul class="navbar-nav">
											<li class="nav-item pb-1">
												<a class="nav-link" href="javascript:void(0);">Learning</a>
											</li>
											<li class="nav-item pb-1">
												<a class="nav-link" href="#section1"> Production</a>
											</li>
											<li class="nav-item pb-1">
												<a class="nav-link" href="#section3">Your Work</a>
											</li>            
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<!-- banner	-->
        
       <!--  end banner  -->
				 
 				<section class="step-sec">
 					<div class="container">
 						
				 		
				 		<div class="step-outr">
				 			
				 			<div class="row">
				 			
				 			<div class="col-lg-4 col-sm-4" style="border: #A01F62 5px solid">
				 				<div class="steps-bx">
				 					<a href="javascript:void(0);" class="stp-icn stp-1"><img src="https://thestoriesofchange.com/wp-content/uploads/2019/09/jagruti5-375x195.png" alt="umeed"/></a>
				 					<div class="step-des">
				 						<h3>HOMEWORK</h3>
                                        <h4><?php echo $hwname; ?></h4>
				 					</div>
				 				</div>
							 </div>

							 <div class="col-lg-4 col-sm-4" style="border: #A01F62 5px solid">
				 				<div class="steps-bx">
				 					<a href="javascript:void(0);" class="stp-icn stp-3"><img src="cash-icn.png" alt=""/></a>
				 					<div class="step-des">
                                         <form method="post" enctype="multipart/form-data">
				 						<h3>Upload</h3>
				 						<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
				 						<br>
				 						<button class="btn btn-primary" type="submit" name="upload">Upload</button>
                                             </form>
				 					</div>
				 				</div>
				 			</div>
							 



				 			<div class="col-lg-4 col-sm-4" style="border: #A01F62 5px solid">
				 				<div class="steps-bx">
				 					<a href="javascript:void(0);" class="stp-icn stp-2"><img src="d-cart-icn.png" alt=""/></a>
				 					<div class="step-des">
				 						<h3>Feedback</h3>
				 						<p> <input type="textarea" size="30"><br /></p>
				 						<br>
				 						<button class="btn btn-primary">Submit</button>
                                        
				 					</div>
				 				</div>
				 			</div>
                               
				 			
                                    
				 		</div>
				 		</div>
				 		
 					</div>
 				</section>
 				
 				      


 
 
 <section class="consulting-sec techno-sec agri-sec" id="section3">
 	<div class="container" style="border: #A01F62 1px solid">
 		<div class="explore-outr agri-innr">
 			<div class="row">
 				<!-- <div class="col-lg-6 col-sm-6 align-self-center">
 				<div class="abt-pic wow fadeInUp" data-wow-delay="0.2s">
 					<img src="https://images.indianexpress.com/2017/10/intl-rural-womens-day003_820.jpg" class="img-thumbnail" alt=""/>
 				</div>
 			</div> -->
 			<div class="col-lg-6 col-sm-6 align-self-center">
 				<div class="explore-des techno-des text-left">
		 			<div class="commn-hdr">
			 			<div class="commn-logo"><img src="images/comm-logo.png" alt=""/></div>
			 			<h2>Update your Progress</h2>
		 			</div>	
					 <p>SELECT YOUR PRODUCT:</p>
					 <form method="POST" class="form-group" enctype="multipart/form-data">
		 			<select class="form-control" id="cars" name="products"style="border: #A01F62 1px solid; width: 100px">
						<option value="Lamp">Lamps</option>
						<option value="DIYA">Diya</option>
						<option value="BAG">Bags</option>
						<option value="POTS">Pots</option>
						</select>

						<br>
						<br>

					 <a  ><input class="form-control" name="number" type="text" placeholder="Completed" size="15" style="border: #A01F62 1px solid"></a>
</br></br>
					
					 
					 
 				</div>
			 </div>
			 <div class="col-lg-6 col-sm-6 align-self-center">


			 <a href="javascript:void(0);" class="story-blog-img">
                           <img src="https://media.architecturaldigest.in/wp-content/uploads/2019/05/Indian-crafts_1.jpg" alt="">
                        </a>
                        <div class="story-blog-content">
						   <h4><input type="file" name="file1" id="file1"></h4>
						   <button name="submit" type="submit" class="btn btn-primary">SUBMIT</button>
                           
                          
					   </div>
					   </div>
					   </form>
 		</div>
 		</div>
 	</div>
 </section> 
 
      
     <section class="stories-sec">
           <div class="container">
           	
           	
           	<div class="commn-hdr text-center">
	 			<div class="commn-logo"><img src="images/comm-logo.png" alt=""/></div>
	 			<h2>PRODUCT MADE</h2>
	 		</div>

                <div class="row stories-bdysec">
                    <!-- <div class="col-lg-4 col-md-4 col-sm-4 stories-blog wow fadeInUp" data-wow-delay="0.2s" style="border: #A01F62 5px solid">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 stories-blog wow fadeInUp" data-wow-delay="0.4s">
                        
                    </div> -->
                    <div class="stories-blog wow fadeInUp" data-wow-delay="0.6s" style="border: #A01F62 5px solid; width: 100%">
                        <a href="javascript:void(0);" class="story-blog-img">
            
                        </a>
                        <div class="story-blog-content">
                           <center><h4>MANAGER FEEDBACK</h4></center>
						   <center><span><?php  echo $comm	; ?></span></center>
                       </div>
                    </div>
               </div>
           </div>
       </section>
       



    <!-- footer sec -->
      
        <!--    end footer   -->   
       
       
                
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/wow.min.js" ></script>
        <script src="js/custom.js"></script>
        <script>
        	

			var maxHeight = 0;
			
			$(".steps-bx").each(function(){
			   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
			});
			
			$(".steps-bx").height(maxHeight);


        </script>
        
        <script>
        	$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('ul li a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.navbar-nav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.navbar-nav li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
        </script>
        
        
	</body>

</html>
<?php
if(isset($_POST["upload"]))
{
    if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
    {
        $imgdata = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name'])); 
        $sql = "UPDATE `learning` SET `hw`='$imgdata' WHERE uid='$id' ";
        $run = mysqli_query($con,$sql);
        if($run == true)
        {
            
          echo "uploaded";
        }
        else
        {
            echo"error";
        }
    }
   
    
}


if (isset($_POST["submit"])) {
	$id = 3;
	$products = $_POST["products"];
	$number = $_POST["number"];
	$query = "update production set completed='$number' where uid='$id' and p_task='$products'";
	$run1 = mysqli_query($con,$query);	

		if(is_uploaded_file($_FILES['file1']['tmp_name'])){
        $imgdata1 = addslashes(file_get_contents($_FILES['file1']['tmp_name'])); 
        $sql1 = "insert into images (uid, image, product) values ('$id', '$imgdata1', '$products')";
        $run2 = mysqli_query($con,$sql1);
        if($run2 == true && $run1 == true)
        {
            
		  echo "uploaded";
		  ?>
		  <script>alert('Progress Updated')</script>
		  <?php
        }
        else
        {
            echo"error";
        }
    }
}
?>