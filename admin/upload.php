
<?php
// session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $status=1;
 $name=$_POST['txt'];
 $folder="uploads/";
 $pic = "uploads/". $_FILES['image']['name'];
 move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO tbl_uploads(id,file,type,size,nameb,imageb,Is_Active) VALUES('','$file','$file_type','$file_size',' $name',' $pic',' $status')";
 $qeu=mysqli_query($connect,$sql); 

 if($qeu)
{
$msg="your file is upload it";
}
else{
   $error="Something went wrong . Please try again.";    
   } 
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





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body class="fixed-left">
<div id="wrapper">

<?php include('includes/topheader.php');?>
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

<form action="upload.php" method="post" enctype="multipart/form-data" class = "form-horzintal well col-md-6">
<div class="form-group">
<label class="col-md-2 control-label">add name of book</label>
 <div class="col-md-10">
<input type="text" name="txt" class="form-control" required/>
</div></div>

<div class="form-group">
 <label class="col-md-2 control-label">Add Image</label>
 <div class="col-md-10">
<input type = "file" name = "image" class = "btn btn-info btn-file "  required>
 </div>
 </div>

 <div class="form-group">                                           
<label class="col-md-6 control-label">select your books</label>
 <div class="col-md-10">
<input type="file" name="file" class = "btn btn-primary btn-file "  required/><br>
<button type="submit" name="btn-upload"   class = "btn btn-info btn-file "  >upload</button>
</div></div>
</form>
</body>
</html>
