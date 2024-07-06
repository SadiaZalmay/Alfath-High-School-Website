
<?php
//include('config.php');
$connect = mysqli_connect("localhost","root","","smdk");
if($connect === false){
    echo "connection not do it";

}

else{

    echo "connection  do it";
}


if(isset($_POST['submit'])){
$name = $_POST['name'];
$dec = $_POST['massage'];
$mar =$_POST['emile'];
$sql = "INSERT INTO connect(id,name,massage,emile)VALUES('','$name','$dec','$mar')";
if(mysqli_query($connect,$sql)){
    echo "insertion do it";
}

else{
    echo "insertion not do it";
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">

<link rel="icon" href="images/14.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
			<div class="home_background prlx" style="background-image:url(images1/kkkkkk.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<div class="contact_form_container">
							<form action="#" method="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required." name="name">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required." name="emile">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="massage" placeholder="Message" required="required" data-error="Please, write us a message." name="massage"></textarea>
								    <button type="submit" name="submit" id="contact_send_btn" class="contact_send_btn trans_200">
                                                    Submit
                                                </button>
							</form>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images1/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									3rd Macrorayan, Kabul, Afghanistan
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images1/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+937852894
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images1/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>AlfathaSchool@kabul.edu
								</li>
							</ul>
						</div>

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>