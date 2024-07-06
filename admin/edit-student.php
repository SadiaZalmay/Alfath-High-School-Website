<?php
include('includes/config.php');
    if(isset($_POST['submit'])){  
        $catid=intval($_GET['cid']); 
        $ac = $_POST['a_courses'];
        $ct= $_POST['c_teacher'];                 
        $tname = $_POST['g_student'];
        $student = $_POST['c_student'];
        $query=mysqli_query($connect,"Update  student_info set a_courses=' $ac',c_teacher=' $ct', g_student=' $tname', c_student=' $student' where id='$catid'");
        if($query)
        {
        $msg="Category Updated successfully ";
        }
        else{
        $error="Something went wrong . Please try again.";    
        } 
        }

?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>sradar mohammd dawod khan</title>

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
                                    <h4 class="page-title">Edit student</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                       
                                        <li>
                                            <a href="manage sdtudent.php">manage student </a>
                                        </li>
                                        <li class="active">
                                            Edit student
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
                                    <h4 class="m-t-0 header-title"><b>Edit student </b></h4>
                                    <hr />
                        		


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


</div>
</div>

<?php 
$catid=intval($_GET['cid']);
$query=mysqli_query($connect,"Select id,a_courses,c_teacher,g_student,c_student from student_info");
$cnt=1;
while($row=mysqli_fetch_array($query))

?>


                                        <div class="row">
                                        <div class="col-md-6">
                                            <form action  = "#" method = "POST">
                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Add courses </label>
	                                                <div class="col-md-10">
	                                                    <input type="number" class="form-control" value="" name="a_courses" required>
	                                                </div>
	                                            </div><br><br><br>
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Add teachers </label>
	                                                <div class="col-md-10">
	                                                    <input type="number" class="form-control" value="" name="c_teacher" required>
	                                                </div>
	                                            </div><br><br><br>
                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Add student </label>
	                                                <div class="col-md-10">
	                                                    <input type="number" class="form-control" value="" name="g_student" required>
	                                                </div>
	                                            </div><br><br><br>
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label"> student Description</label>
	                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="" name="c_student" required>  
	                                                </div>
	                                            </div>

                                               <div class="form-group">  
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10"> <br>
                                               <input type = "submit" class = "btn btn-primary pull-left" value = "submit" name = "submit">
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
        <!-- END wrapper -->



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
