
<?php
	$connect = mysqli_connect('localhost','root','','sdk');
	if($connect == false){
      
		echo"your are not connect to servae";
	}
	echo "your connect to sarver";

    if(isset($_POST['submit'])){                    
        $name = $_POST['fname'];
        $mam = $_POST['lname'];
        $gen = $_POST['gender'];
        $ema = $_POST['email'];
        $cont = $_POST['contact'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
         $pic = "images/". $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
            if(!empty($name) && !empty($mam)){
                $sql = "INSERT INTO member (id,fname,lname,gender,email,contact,username,password,picture) VALUES('',' $name', '$mam','$gen','$ema','$cont','$user','$pass','$pic')";
                    if(mysqli_query($connect,$sql)){
                        echo "insertion do it";
                    }
                    else {
                        echo "not upload file";
                    }
                    
            }
            else {
                echo "All field required.";
            }
    }




?>







<!DOCTYPE html>
<html lang="en">
    <head>

        <title>smdk| Add Category</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Teacher</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Teacher</a>
                                        </li>
                                        <li class="active">
                                            Add Teacher
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Teacher</b></h4>
                                    <hr />
                        		






</div>
</div>


                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="course" method="post" enctype = "multipart/form-data">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">F/Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="fname" required>
	                                                </div>
	                                            </div>

                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">L/Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="lname" required>
	                                                </div>
	                                            </div>


                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-5">
	                                                   <select class="form-control" name="gender" required>
                                                       <option value="Male">Male</option>
					                                 <option value="Female">Female</option>
                                                       </select>
	                                                </div>
	                                            </div>
	                                     

                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-10">
	                                                    <input type="email" class="form-control" value="" name="email" required>
	                                                </div>
	                                            </div>


                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">contact</label>
	                                                <div class="col-md-10">
	                                                    <input type="number" class="form-control" value="" name="contact" required>
	                                                </div>
	                                            </div>


                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">username</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="username" required>
	                                                </div>
	                                            </div>


	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">password</label>
	                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="" name="password" required>
	                                                </div>
	                                            </div>

                                               
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">picture</label>
	                                                <div class="col-md-10">
	                                                      <input type = "file" name = "image" class = "btn btn-primary btn-file "  required>
	                                                </div>
	                                            </div>


        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

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
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
    
</html>