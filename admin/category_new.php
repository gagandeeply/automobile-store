<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>

  <section class="content">

  	<header class="content__title">

  		<h1>Product category</h1>

  	</header>

	

<div class="row quick-stats">

	<div class="col-sm-2">

	</div>

  		<div class="col-sm-8">

  			<div class="card">

  				<div class="card-body">

  					<h4 class="card-title">Category Detail</h4>

					<p id="error" style="color:red;"></p> 

  					<form method="post" action="#" enctype="multipart/form-data">

  						<input type="hidden" name="_csrf" value="ASDi0Axi-kyAQODFjNkVd0l0i6ZlMOiIyZnQ">

  						<div class="form-group">

  							<input type="text" class="form-control" name="cname" id="cname" placeholder="Category Name" autofocus="true" value="" required>

  							<i class="form-group__bar"></i>

  						</div>

  						

  						<button type="button" onclick="createcat();" class="btn btn-success">Add New Category</button>

  					</form>

  				</div>

  			</div>	

  		</div>

  	<div class="col-sm-2">

	</div>

  	</div>

  

  </section>

  

        </main>



       <?php include('includes/footer.php'); ?>

