<?php
// session_start();
$connect = mysqli_connect("localhost","root","","smdk");
if($connect === false){
    echo "connection not do it";

}

	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username) && !empty($password)) {
			$query = "SELECT id from member  WHERE username = '$username' && password = '$password'";
				$query_run = mysqli_query($connect,$query);
					 $query_num_row = mysqli_num_rows($query_run);
						if($query_num_row == 0) {
						echo "You entered invalid username and password.";
				}
                 else if($query_num_row == 1) {
                     echo "you entered ";
						header("Location:dashboard.php");
				}

		}
		else {
			echo "You must enter username/password!.";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="News Portal.">
        <meta name="author" content="PHPGurukul">


        <!-- App title -->
        <title>Admin Panel</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
<style>

.testimonials
{
	width: 100%;
	height:100%;
	background: #1a1a1a;
}
.testimonials_background_container
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.testimonials_background
{
	width: 100%;
	height:100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	
}
.container{
    margin: 150px;
}
.panel-title {
    margin: 18px;
}
.panel-title {
    text-align:center;
    font-style:bold; 
    font-size:20px;
}
input{
    padding:0px 200px 0px 200px;
     
}



</style>
</head>
<body>

<!-- Top Bar Start -->
<?php include('includes/header.php');?>

        <!-- <div   class="testimonials page_section">
                <div class="testimonials_background_container prlx_parent"  >
                    <div class="testimonials_background prlx"  style="background-image:url(images/ss.jpg)" ></div>
                
                </div> -->
                    
                <div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container ">
			<div class="testimonials_background "  style="background-image:url(images/ss.jpg)"></div>
		</div>
        
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text-center">
					
                    <div class="login-panel panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title ">Please Sign In</h3>
                    </div>
                    <div class="panel-body"  >
                        <form role="form"action = "#" method = "post"  >
                            <fieldset >
                                <div class="form-group">
                                    <input  class="form-control" placeholder="Username" name="username" type="text" style="padding:20px;"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" style="padding:20px;"  type="password" value="">
                                </div>
                           
                                  
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type = "submit" class="btn btn-lg btn-info btn-block" value = "Login">
                            </fieldset>
                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        


					</div>
                    
				</div>
                
			</div>
            
            </div>
			</div>





        
                
<!-- END HOME -->

<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

       
      
</body>
</html>