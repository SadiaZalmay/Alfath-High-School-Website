<?php 
// session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
    if(isset($_POST['submit'])){                    
        $tname = $_POST['t_name'];
        $fname = $_POST['fname'];
        $des = $_POST['des'];
        $se = $_POST['sel'];
         $pic = "images/". $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
            if(!empty($tname) && !empty($des)){
                $sql = "INSERT INTO teacher (id,t_name,fname,education,description,img) VALUES('','$tname', '$fname','$se','$des','$pic')";
                    if(mysqli_query($connect,$sql)){
                        $msg="insertion do it";
                    }
                    else {
                        $error="Something went wrong . Please try again."; 
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

        <title>smdk| Add teacher</title>

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
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>


<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="course" method="post" enctype = "multipart/form-data">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Teacher</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="t_name" required>
	                                                </div>
	                                            </div>

                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">F/Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="fname" required>
	                                                </div>
	                                            </div>

                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Teacher Dgree</label>
	                                                <div class="col-md-5">
	                                                   <select class="form-control" name="sel" required>
                                                       <option>bacholar</option>
                                                       <option>mastar</option>
                                                       </select>
	                                                </div>
	                                            </div>
	                                     
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Teacher Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" rows="5" name="des" required></textarea>
	                                                </div>
	                                            </div>

                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Teacher Description</label>
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
<?php }?>