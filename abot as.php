<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<link rel="icon" href="images/14.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<script src="jquery-3.4.1.js"></script>
</head>
<body>

<div class="super_container">

	<!-- Header -->
<?php
include('includes/header.php');
?>
	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images1/ma1.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>About</h1>
		</div>
	</div>

	<!-- Popular -->
<!-- ///// -->
 <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="section-title-underline">
				  <span>Alfatha High School's History</span><br><br>
				  <p>Alfatha High School was established in 1389 by ministry of education and for the first the manager of this school was (Torpiky "Moman") she was a very profional maneger but after 4 years she went to onther school and ofer that onther maneger was came her name was (Nrges"Maroj") she had a very good pariod in this school ofther this  anther manger was came her name was (Safya"Hayat") new we have very profitional head hir name is (Najiba "Safi").</p>
                </h2>
              </div>
              <div class="col-lg-5 offset-1">
				
				<img src="images1\ma1.jpg" width="450px" style="border: solid 3px  #13a3d3; border-radius: 7px;">
			  </div>
             
            </div>
          </div>  

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
				<h2 class="section-title-underline mb-5">
                        <span>Our staff</span>
                    </h2>
                    <p>We have very professional employees in our school, including a dedicated director, assistant directors, principal, teachers, administrators, librarians, and support staff. Our school offers extensive facilities such as spacious classrooms for students, two laboratories (one for chemistry and biology, and another for mathematics and physics), a well-equipped library, and two computer labs (one for ICT and another for coding classes). Additionally, we offer various courses, including English, ICT, coding, and Kankor preparation classes. Our school also has a kindergarten for young children, traditional classes, and many other offerings.</p>
                    <p></p>
                </div>
                <div class="col-lg-5 offset-1 align-self-center">
                   
					<img src="images1/mmm.PNG" alt="Image"  width="450px" class="img-fluid" style="border: solid 3px  #13a3d3; border-radius: 7px;"> 
                </div>
            </div>
			
            <div class="row" style="padding-bottom: 50px;">
                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images1/moder.PNG" width="450px" alt="Image" class="img-fluid" style="border: solid 3px  #13a3d3; border-radius: 7px;"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
						<?php 
$pagetype='aboutus';
$query=mysqli_query($connect,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
<h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
  </h1>

  

  <!-- Intro Content -->
  <div class="row">

	<div class="col-lg-12">

	  <p><?php echo $row['Description'];?></p>
	  
	</div>
  </div>
  <!-- /.row -->
<?php } ?>


                        
                    </div>
                </div> 
        </div>
    </div> 
   <!-- Footer -->

   <?php
include('includes/footer.php');

?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>