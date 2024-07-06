
<?php
//include('config.php');
$connect = mysqli_connect("localhost","root","","smdk");
if($connect === false){
    echo "connection not do it";

}

else{

    echo "connection  do it";
}


if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $status=1;
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO tbl_uploads(id,file,type,size,Is_Active) VALUES('','$file','$file_type','$file_size','$status')";
 $que=mysqli_query($connect,$sql); 
 if($que){

    $msg=" record created ";
 }
else{

   $error="Something went wrong . Please try again.";  
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>smdk| Add librery</title>

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
                                    <h4 class="page-title">Add librery</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                <a href="#">librery</a>
                                        </li>
                                        <li class="active">
                                            Add librery
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
                                    <h4 class="m-t-0 header-title"><b>Add librery</b></h4>
                                    <hr />
                                
                                    <div class="row">
<div class="col-sm-6">  
 
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>


<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>
</div>
</div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action  = "#" method = "POST" class = "form-horzintal well col-md-6" enctype = "multipart/form-data">
                                                <label class="col-md-2 control-label"></label>
                                                    <div class="col-md-10"><br>
                                                       <input type = "file" name = "image" class = "btn btn-primary btn-file "  required>
                                                    </div></div>
                                                   
                                               <div class="form-group">  
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10"> <br>
                                               <input type = "submit" class = "btn btn-primary pull-left" value = "submit" name="btn-upload">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>


                                    </div>


                                    




           
                       


                                </div>
                            </div>
                        </div>
                      
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