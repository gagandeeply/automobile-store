<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>
<?php
error_reporting(0);
define('DbHost' , 'localhost');

define('DbUser' , 'kaviuafe_shop');

define('DbPass' , 'hardwork@123');

define('DbName' , 'kaviuafe_shop');

$conn2 = mysqli_connect(DbHost,DbUser,DbPass,DbName) or die('Could not connect: '. mysqli_error());
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<p style='color:#fff;text-align:center;'>File is an image - " . $check["mime"] . ".</p>";
    $uploadOk = 1;
  } else {
    echo "<p style='color:#fff;text-align:center;'>File is not an image.</p>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
 
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p style='color:#fff;text-align:center;'>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  $pname = $_POST["pname"];
	 $pdescription = $_POST["pdescription"];
	 $pprice = $_POST["pprice"];
	 $s_category = $_POST["s_category"];
	 $fname = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
	$gh2 = "INSERT INTO `product`(`pname`, `pdescription`, `pprice`, `pcategory`, `pimage`) VALUES ('$pname','$pdescription','$pprice','$s_category','$fname')";
     $result2 =  mysqli_query($conn2,$gh2);
	 if($result2)
	 {
	  echo "<script>alert('Product uploaded Successfully')</script>";
	 header('Location: https://kavity.co/admin/products.php');
	 }
  } else {
    echo "<p style='color:#fff;text-align:center;'>Sorry, there was an error uploading your file.</p>";
  }
} 
?> 
  <section class="content">

  	<header class="content__title">

  		<h1>Products</h1>

  	</header>

	

<div class="row quick-stats">

	<div class="col-sm-2">

	</div>

  		<div class="col-sm-8">

  			<div class="card">

  				<div class="card-body">

  					<h4 class="card-title">Product Details</h4>

					<p id="error" style="color:red;"></p> 

  					<form method="post" action="#" enctype="multipart/form-data">

  						<input type="hidden" name="_csrf" value="ASDi0Axi-kyAQODFjNkVd0l0i6ZlMOiIyZnQ">

  						<div class="form-group">

  							<input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" autofocus="true" value="" required>

  							<i class="form-group__bar"></i>

  						</div>

  						

  						<div class="form-group">

  							<textarea class="form-control" name="pdescription" id="pdescription" placeholder="Product Description" required></textarea>

  							<i class="form-group__bar"></i>

  						</div>

						<div class="form-group">

  							<input type="number" class="form-control" onkeyup="onlyNumbers(this)" name="pprice" id="pprice" placeholder="Product Price" value="" required>

  							<i class="form-group__bar"></i>

  						</div>

						

  						<div class="form-group">

  							<select class="form-control" name="s_category" id="s_category" autofocus="true" value="" style="background: #51a083;color: #fff;" required>

  		<option value="">Select Category</option>

  		 <?php

		$db= new functions();

		$res = $db->fechcat();

     while($row = mysqli_fetch_assoc($res))

	{ ?>

		<option value="<?php echo $row['id'] ?>"><?php echo $row['cname'] ?></option>

	<?php } ?>

	<i class="form-group__bar"></i>

	</select>


  							<i class="form-group__bar"></i>

  						</div>

						

  						<div class="form-group mt-3">
  							<h3 class="card-body__title">Product Image</h3>
  							<input type="file" class="form-control" name="fileToUpload" required>
  							<i class="form-group__bar"></i>
  						</div>
  						

  						<button type="submit"  class="btn btn-success">Add New Product</button>

  					</form>

  				</div>

  			</div>	

  		</div>

  	<div class="col-sm-2">

	</div>

  	</div>

  

  </section>

  <script>

function onlyNumbers(num){

   if ( /[^0-9]+/.test(num.value) ){

      num.value = num.value.replace(/[^0-9]*/g,"")

   }

}

</script>

        </main>



       <?php include('includes/footer.php'); ?>

