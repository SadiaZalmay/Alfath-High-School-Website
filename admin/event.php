<?php 
// session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{


    if(isset($_POST['post'])){
        $name= $_POST['eventname'];
        $descrip = $_POST['evdescription'];
        $create = $_POST['createevent'];
        $Updation = $_POST['UpdationDateev'];
         $pic = "images/". $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
            if(!empty($name) && !empty($descrip)){
                $sql = "INSERT INTO event(id,eventname,evdescription,createevent,UpdationDateev,img ) VALUES('',' $name', ' $descrip', '$create', '$Updation','$pic')";
                    if(mysqli_query($connect,$sql)){
                        echo "<p class = 'alert alert-success'>Your comment has been sent to server.></p>";
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

        <title>Add Category</title>

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
                                    <h4 class="page-title">Add evenr</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                <a href="#">event</a>
                                        </li>
                                        <li class="active">
                                            Add event
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
                                    <h4 class="m-t-0 header-title"><b>Add event</b></h4>
                                    <hr />
                                






</div>
</div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action  = "#" method = "POST" class = "form-horzintal well col-md-6" enctype = "multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">event</label>
                                                    <div class="col-md-10">
                                                        <input type = "text" name = "eventname" class = "form-control" required>
                                                    </div>
                                                </div><br><br>
                                         
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">event Description</label>
                                                    <div class="col-md-10">
                                                        <textarea cols = "65" rows = "5" class = "form-control" name = "evdescription" required></textarea><br>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">event</label>
                                                    <div class="col-md-10">
                                                        <input type = "datetime-local" name = "createevent" class = "form-control" required><br>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">event</label>
                                                    <div class="col-md-10">
                                                        <input type = "datetime-local" name = "UpdationDateev" class = "form-control" required><br>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                <label class="col-md-2 control-label">Add Image</label>
                                                    <div class="col-md-10">
                                                       <input type = "file" name = "image" class = "btn btn-primary btn-file "  required>
                                                    </div></div>
                                                </div>

        <div class="form-group">  




                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                               <input type = "submit" class = "btn btn-primary pull-left" value = "submit" name = "post">
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
        </div><br><br>

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