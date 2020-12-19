<?php include('includes/header.php'); 
error_reporting(0);
	$db= new functions();
?>
<style>
.list-group-item {
    position: relative;
    color: #fff;
    display: block;
    padding: 0.75rem 1.25rem;
    font-weight: bold;
    margin-bottom: -1px;
    background-color: hsl(3deg 100% 65%);
    border: 1px solid rgb(255 255 255);
}
.card-img-top {
    width: 100%;
    height: 170px;
}
</style>
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Kavity Shop</h1>
        <div class="list-group">
		 <a href="https://kavity.co/shop.php" class="list-group-item">All</a>
		 <?php
		$res = $db->fechcat();

     while($row = mysqli_fetch_assoc($res))
	 { ?>
          <a href="https://kavity.co/shop.php?id=<?php echo $row['id']; ?>" class="list-group-item"><?php echo $row['cname']; ?></a>
     <?php } ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://www.hendy.co.uk/_sites/live/hendycontentfordcv/images/pagecontents/W15535-Hendy-Ford-0-CV-Web-Banners-HR6.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.smarthomebus.com/smart-banner/museum/images/example1/car.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.brantcountyspca.com/wp-content/uploads/charity-banner.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      
<?php 
$cid = $_REQUEST['id'];
if($cid !='')
{
	$resh = $db->fechprocat($cid);
	$reshy = $db->fechcatid($cid);
	$rowhy = mysqli_fetch_assoc($reshy)
	?>
	<h2 style="text-align: center;padding: 10px;"><?php echo $rowhy['cname']; ?> Cars</h2>  <div class="row">
	<?php
}
else
{
$resh = $db->fechpro();
}?>
 <div class="row">
<?php
     while($rowh = mysqli_fetch_assoc($resh))
	 {
?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="javascript:void(0);" onclick="alert('coming_soon');"><img class="card-img-top" src="/admin/uploads/<?php echo $rowh['pimage']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a  href="javascript:void(0);" onclick="alert('coming_soon');"><?php echo $rowh['pname']; ?></a>
                </h4>
                <h5>$<?php echo $rowh['pprice']; ?></h5>
                <p class="card-text"><?php echo $rowh['pdescription']; ?></p>
              </div>
              <div class="card-footer">
			  <?php if($email !='') { ?>
                <a href="https://kavity.co/cart.php?id=<?php echo $rowh['id']; ?>" target="_blank"><small class="text-muted" style="float: right; background: #057dff;color: #fff !important;font-size: 12px;padding: 8px;cursor: pointer;">Buy Now</small></a>
              <?php } else { ?>
			  <small class="text-muted" style="float: right; background: #057dff;color: #fff !important;font-size: 12px;padding: 8px;cursor: pointer;" onclick="alert('Please Login/Register top Buy this Product!')" >Buy Now</small>
			  <?php } ?> 
			  </div>
            </div>
          </div>
	 <?php } ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>


<?php include('includes/footer.php'); ?>