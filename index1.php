
   <!DOCTYPE html>
<html lang="en">
<head>
<title>ardar mohammd dawod khan</title>
<meta charset="utf-8">

<link rel="stylesheet" href="images/14.png" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>

<script src="js/jquery.kwicks-1.5.1.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="bg-content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="flexslider"  >
          <ul class="slides" id="responsiveFlag">
            <li > <img  src="images1/kkkk.PNG" alt=""> </li>
            <li> <img src="images1/llklk.jpg" alt=""> </li>
            <li> <img src="images1/mab.PNG" alt=""> </li>
            <li> <img src="images1/ma1.jpg" alt=""> </li>
            <li> <img src="images1/kkkk.PNG" alt=""> </li>
          </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
       
      



<?php 
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

<style>
.bg-content{
  background-image:url('images/bg-content.jpg');
}
</style>
  </head>
  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($connect,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($connect,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 <p style="   color: #858585;"><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-info">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
        </div>
      <?php include('includes/sidebar.php');?>
      </div>
    </div>

<?php
include('includes/footer.php');
?>

</head>
</body>
</html>
