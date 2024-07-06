<!DOCTYPE html>
<html lang="en">
<head>
<title>Teachers</title>
<meta charset="utf-8">
<link rel="icon" href="images/14.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
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
			<div class="home_background prlx" style="background-image:url(images1/mar.png)"></div>
		</div>
		<div class="home_content">
			<p style="font-size:59px;color:white;">Teachers</p>
			<?php
include('includes/config.php');

?>
		</div>
	</div>

	<!-- Teachers -->
         
	<div class="teachers page_section">
		<div class="container">
		
			<div class="row">
			
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
						
				<?php
				// echo'<img height="300" width="300" src=":image;base64,'.$rows['img'].'">';
	   
        ?>
<?php
			 $sql = "SELECT t_name,img,description FROM teacher ORDER BY id  LIMIT 1";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?> 
							<img height="350" width="350"  class="card-img-top trans_200" src="admin/<?php echo $row['img'] ?>" alt="https://unsplash.com/@michaeldam">
			  
						</div>
			
						<div class="card-body text-center">
							<div class="card-title"><a href="#"><?php echo $row['t_name'];?></a></div>
							<div class="card-text"><?php echo $row['description']?></div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php  }?>

				<?php
			 $sql1 = "SELECT t_name,img,description FROM teacher ORDER BY id DESC  LIMIT 5 ";
			 $result = mysqli_query($connect, $sql1);
			  while($row = mysqli_fetch_array($result)){
					?>
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
						
							<img height="350" width="350" class="card-img-top trans_200" src="admin/<?php echo $row['img'] ?>" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#"><?php  echo $row['t_name'];?></a></div>
							<div class="card-text"><?php  echo $row['description'];?></div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
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

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background" style="background-image:url(images/img.jpg)"></div>

		<div class="container">
		
			<div class="row">
				<!--mahajeera-->
				<!-- Milestone -->
				<?php
			 $sql = "SELECT * FROM student_info WHERE id = (SELECT MAX(id) FROM student_info ORDER BY id LIMIT 1)";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?> 
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images1/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="<?php echo $row['c_student'];?>">0</div>
						<div class="milestone_text">Current Students</div>
					</div>
				</div>
				<?php }?>
				<!-- Milestone -->
				<?php
			 $sql = "SELECT * FROM student_info WHERE id = (SELECT MAX(id) FROM student_info ORDER BY id LIMIT 1)";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?> 
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images1/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="<?php echo $row['c_teacher'];?>">0</div>
						<div class="milestone_text">Certified Teachers</div>
					</div>
				</div>
				<?php }?>
				<!-- Milestone -->
				<?php
			 $sql = "SELECT * FROM student_info WHERE id = (SELECT MAX(id) FROM student_info ORDER BY id LIMIT 1)";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?>
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images1/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="<?php echo $row['a_courses'];?>">0</div>
						<div class="milestone_text">Approved Courses</div>
					</div>
				</div>
				<?php }?>
				<!-- Milestone -->
				<?php
			 $sql = "SELECT * FROM student_info WHERE id = (SELECT MAX(id) FROM student_info ORDER BY id LIMIT 1)";
			 $result = mysqli_query($connect, $sql);
			  while($row = mysqli_fetch_array($result)){
					?> 
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images1/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="<?php echo $row['g_student'];?>" data-sign-before="+">0</div>
						<div class="milestone_text">Graduate Students</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>

	<!-- Become -->

	<div class="become">
		<div class="container">
			<div class="row row-eq-height">

				<div class="col-lg-6 order-2 order-lg-1">
					<div class="become_title">
						<h1>Become a teacher</h1>
					</div>
					<p class="become_text">Join us and help the future of our next generation!</p>
					<div class="become_button text-center trans_200" style=" width:550px;" >
						<a href="#" data-toggle="collapse" data-target="#demo" style="color:white;">Read More</a>
						
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_image">
						<img src="images1/course_2.jpg" alt=""  height="350px" width="350px" style="border: solid #13a3d3 4px; border-radius: 6px;">
					</div>
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
<script src="js/teachers_custom.js"></script>

</body>
</html>