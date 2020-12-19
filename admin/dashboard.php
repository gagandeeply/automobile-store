<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
  <section class="content">
  	<header class="content__title">
  		<h1>Dashboard</h1>
  	</header>
  	<div class="row quick-stats">
  		<div class="col-sm-6 col-md-3">
  			<a href="#">
  				<div class="quick-stats__item">
  					<div class="quick-stats__info">
  						<?php    
		$db= new functions();
		$res = $db->fechpro();
		$rowcount=mysqli_num_rows($res);
		?>
		<h1><?php echo $rowcount; ?></h1>
  						<small>Total Products</small>
  					</div>
  					<div class="peity">
  						<i class="zmdi zmdi-balance-wallet zmdi-hc-fw"></i>
  					</div>
  				</div>
  			</a>
  		</div>
  		<div class="col-sm-6 col-md-3">
  			<a href="#">
  				<div class="quick-stats__item">
  					<div class="quick-stats__info">
  					
  					</div>
  					<div class="peity">
  						<i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
  					</div>
  				</div>
  			</a>
  		</div>
  		<div class="col-sm-6 col-md-3">
  			<a href="#">
  				<div class="quick-stats__item">
  					<div class="quick-stats__info">
  						
  					</div>
  					<div class="peity">
  						<i class="zmdi zmdi-balance-wallet zmdi-hc-fw"></i>
  					</div>
  				</div>
  			</a>
  		</div>
  		<div class="col-sm-6 col-md-3"> 
  			<div class="quick-stats__item">
  				<div class="quick-stats__info">
  				
  				</div>
  				<div class="peity">
  					<i class="zmdi zmdi-money-box zmdi-hc-fw"></i>
  				</div>
  			</div>
  		</div>
  	</div>
  
  </section>
  
        </main>

       <?php include('includes/footer.php'); ?>