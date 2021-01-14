<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php $orid = $_REQUEST['id']; 
$db= new functions();
?>
  <section class="content">
  	<header class="content__title">
  		<h1>Order Details</h1>
  	</header>
	
<div class="row quick-stats">
	<div class="col-sm-2">
	</div>
  		<div class="col-sm-12">
  			
			<div class="col-sm-6">
			<div class="card">
  				<div class="card-body">
  					<h4 class="card-title">Order Details</h4>
					<p id="error" style="color:red;"></p> 
  					<form method="post" action="#" enctype="multipart/form-data">
  						<input type="hidden" name="_csrf" value="ASDi0Axi-kyAQODFjNkVd0l0i6ZlMOiIyZnQ">
  						<div class="form-group">
						<?php $res = $db->fechordid($orid);
                         $row = mysqli_fetch_assoc($res);
                         $uid = $row['user_id'];						 ?>
						 <label> Product Name</label>
						 <p><?php echo $row['pname']; ?></p>
  								<i class="form-group__bar"></i>
  						</div>
  					<div class="form-group">
							 <label> Product Quantity</label>
  							 <p><?php echo $row['quantity_input']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Product Total Price</label>
  							 <p>$ <?php echo $row['proprice']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Product Color</label>
  							 <p><?php echo $row['color']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Product Tire</label>
  							 <p><?php echo $row['tire']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Product Interior</label>
  							 <p><?php echo $row['interior']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
							<div class="form-group">
							 <label> Product Order By</label>
  							 <p><?php  $resk = $db->fechusersid($uid);  $rowk = mysqli_fetch_assoc($resk)?><?php echo $rowk['name']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
  					</form>
  				</div>
				</div></div>
				<div class="col-sm-6">
				<div class="card">
  				<div class="card-body">
  					<h4 class="card-title">Shipping Details</h4>
					<p id="error" style="color:red;"></p> 
  					<form method="post" action="#" enctype="multipart/form-data">
  						<input type="hidden" name="_csrf" value="ASDi0Axi-kyAQODFjNkVd0l0i6ZlMOiIyZnQ">
  						<div class="form-group">
							 <label> Product Order By</label>
  							 <p><?php  $resk = $db->fechusersid($uid);  $rowk = mysqli_fetch_assoc($resk)?><?php echo $rowk['name']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
  					
						<div class="form-group">
							 <label> First Name</label>
  							 <p><?php echo $row['firstName']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Last Name</label>
  							 <p><?php echo $row['lastName']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Phone</label>
  							 <p><?php echo $row['phone']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Email</label>
  							 <p><?php echo $row['email']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Address</label>
  							 <p><?php echo $row['address']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Address 2</label>
  							 <p><?php echo $row['address2']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Country</label>
  							 <p><?php echo $row['country']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> State</label>
  							 <p><?php echo $row['state']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
						<div class="form-group">
							 <label> Zip</label>
  							 <p><?php echo $row['zip']; ?></p>
  							<i class="form-group__bar"></i>
  						</div>
							
  					</form>
  				</div>
				</div>
  			</div>	
  		</div>
  	<div class="col-sm-2">
	</div>
  	</div>
  
  </section>
  
        </main>

       <?php include('includes/footer.php'); ?>
