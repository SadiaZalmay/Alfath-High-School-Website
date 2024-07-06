<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<span style="color:#13a3d3; font-size: 50px; font-family:Georgia, 'Times New Roman', Times, serif;">S.M.D.K</span>
				
					
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
					   <li class="main_nav_item"><a href="index.php">Home</a></li>
						<li class="main_nav_item"><a href="abot as.php">About us</a></li>
						<li class="main_nav_item"><a href="courses.php">Courses</a></li>
						<li class="main_nav_item"><a href="loginform.php">Admin</a></li>
						<li class="main_nav_item"><a href="news-details.php">News</a></li>
						<li class="main_nav_item"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images1/phone-call.svg" alt="">
			<span>+93 7802 36254</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
				   
				     <li class="menu_item menu_mm"><a href="index">Home</a></li>
					<li class="menu_item menu_mm"><a href="abot as.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.php">Courses</a></li>
					<li class="menu_item menu_mm"><a href="loginform.php">admin</a></li>
					<li class="menu_item menu_mm"><a href="news-details.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images1/bqcj.PNG)"></div>
		</div>
		<div class="home_content">
			<h1>Library</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular book</h1>
					</div>
				</div>
			</div>
			<?php
include('includes/config.php');

?>
				<div class="teachers page_section">
		<div class="container">
			<div class="row">
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
				<?php	   
        ?>
<?php
			 $sql = "SELECT * FROM tbl_uploads WHERE id = 1";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?> 
							<img height="200" width="350"  class="card-img-top trans_200" src="admin/<?php echo $row['imageb']; ?>" alt="https://unsplash.com/@michaeldam">
			  
						</div>
			
						<div class="card-body text-center">
							<div class="card-title"><a href="admin/uploads/<?php echo $row['file'];?>"><?php echo $row['nameb'];?></a></div>
							<div class="card-text"><?php //echo $row['description']?></div>
							<div class="teacher_social">
								
							</div>
						</div>
					</div>
				</div>
				<?php  }?>

				<?php
			 $sql1 = "SELECT * FROM tbl_uploads  ORDER BY id DESC  LIMIT 5 ";
			 $result = mysqli_query($connect, $sql1);
			  while($row = mysqli_fetch_array($result)){
					?>
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
						
							<img height="200" width="350" class="card-img-top trans_200" src="admin/uploads uploads<?php echo $row['imageb']; ?>" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="admin/uploads/<?php echo $row['file'];?>"><?php echo $row['nameb'];?></a></div>
							<div class="card-text"><?php // echo $row['description'];?></div>
							<div class="teacher_social">
								
							</div>
						</div>
					</div>
				</div>
				<?php  }?>
				
				<!-- Teacher -->
				
							
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

	
			
				
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<span style="color:#13a3d3; font-size: 50px; font-family: Georgia, 'Times New Roman', Times, serif;">S.M.D.K</span>
							</div>
						</div>

						<p class="footer_about_text">We always strive to maintain good discipline in our school, supported by our highly professional teachers. This is an excellent institution, and we are continually working to improve the education and opportunities for our girls.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
							<li class="footer_list_item"><a href="index.php">Home</a></li>
								<li class="footer_list_item"><a href="abot as.php">About Us</a></li>
								<li class="footer_list_item"><a href="courses.php">Courses</a></li>
								<li class="footer_list_item"><a href="loginform.php">admin</a></li>
								<li class="footer_list_item"><a href="news-details.php">News</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>

				
				
					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images1/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									3rd Macroraya, Kabul, Afghanistan
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images1/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+934679103
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images1/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>AlfathaSchool@Kabul.edu
								</li>
							</ul>
						</div>
					</div>
	<div class="col-lg-3 footer_col">
						<div class="footer_column_content">
				<img src="images1\selfiecamera_2019-10-23-12-25-51-552.jpg"  width="300px">
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="https://www.facebook.com/لیسه-عالی-شهید-سردار-محمد-داود-خان-292649977841767/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

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