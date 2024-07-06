<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<link rel="icon" href="images/14.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">



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
			<div class="home_background prlx" style="background-image:url(images1/POPOPO.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Course</h1>
		</div>
	</div>


	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
					<h1>Extra Courses at Alfath High School</h1>
						<h2>Rules:</h2>
<ul>
  <li>Initially, students must take a registration exam administered by the WF Foundation in 10th grade.</li>
  <li>Upon passing this exam, students are eligible to enroll in English classes.</li>
  <li>Students who successfully complete the English class can then enroll in the ICT course. Registration is not required for the ICT course if the student has completed English.</li>
  <li>Students who pass the ICT class are eligible to join the Coding and Web Development course. Students who did not take ICT or English can still register for any available course of their choice.</li>
</ul>
					</div>
				</div>
			</div>

		<div class="row course_boxes">
		
		<?php
include('includes/config.php');

?>
				<!-- Popular Course Item 1-->
				<div class="col-lg-4 course_box">
				<?php
			 $sql1 = "SELECT * FROM course ORDER BY c_id  LIMIT 1";
			
			 $result = mysqli_query($connect,$sql1) or die(mysqli_error($con));

			  while($row = mysqli_fetch_array($result)){
				  ?>
					<div class="card">
					<span class="last"><a href="images1/latest_2.jpg" class="magnifier"><img class="card-img-top"  src="images1/muska.jpg" alt="https://unsplash.com/@kellybrito"></a></span>
						<div class="card-body text-center">
							<div class="card-title"><?php echo $row['cname'];?></div>
							<div class="card-text"><?php echo $row['description'];?></div>
						</div>
			  
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
							<?php } ?>
							<p>Alfatha High School</p>
							
							</div>
						
						</div>
					</div>
				</div>

				<?php
			 $sql2 ="SELECT * FROM course ORDER BY c_id  DESC LIMIT 3";
			 $result = mysqli_query($connect,$sql2) or die(mysqli_error($con));
			  while($row = mysqli_fetch_array($result)){
				  ?>
				
			
				<!-- Popular Course Item2 -->
				<div class="col-lg-4 course_box">
					<div class="card">
					<span class="last"><a href="images1/course_1 - Copy.jpg" class="magnifier"><img class="card-img-top"  src="images\20191023_105435.jpg" alt="https://unsplash.com/@kellybrito"></a></span>
						<div class="card-body text-center">
							<div class="card-title"><?php echo $row['cname'];?></div>
							<div class="card-text"><?php echo $row['description'];?></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
						
							<p>Alfath High School</p>
						
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>		
	</div>

<!-- Footer -->
<?php
include('includes/footer.php');

?>
</div>
</footer>
<script>
if ($(window).width() > 1024) {
    document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
}
</script>


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
<script src="js/jquery.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
if ($(window).width() > 1024) {
    document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
}
</script>
<script>
jQuery(window).load(function () {
    $x = $(window).width();
    if ($x > 1024) {
        jQuery("#content .row").preloader();
    }
    jQuery('.magnifier').touchTouch();
    jQuery('.spinner').animate({
        'opacity': 0
    }, 1000, 'easeOutCubic', function () {
        jQuery(this).css('display', 'none')
    });
});
</script>
</body>
</html>