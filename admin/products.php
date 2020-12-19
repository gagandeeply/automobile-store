<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<style>
table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd
{
	background:transparent !important;
}
table.dataTable.stripe tbody tr.even, table.dataTable.display tbody tr.even
{
	background:transparent !important;
}
table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1
{
	background:transparent !important;
}
table.dataTable.display tbody tr.even>.sorting_1, table.dataTable.order-column.stripe tbody tr.even>.sorting_1
{
	background:transparent !important;
}
.dataTables_filter:after, .dataTables_length:after
{
	display:none !important;
}
.dataTables_filter>label input[type=search], .dataTables_filter>label select, .dataTables_length>label input[type=search], .dataTables_length>label select
{
	color: #fff !important;
}
.dataTables_filter>label, .dataTables_length>label {
    margin: 0;
    width: 100%;
    font-size: 15px;
    color: #fff;
}
.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate
{
	color:#fff !important;
}
.dataTables_wrapper .dataTables_length select
{
	
    background-color: #3e8e81 !important;
}
</style>
  <section class="content">
  <header class="content__title">
  		<h1 class="float-left">Products</h1>
  		<a href="https://kavity.co/admin/product_new.php" class="btn btn-success float-right"><i class="zmdi zmdi-plus"></i> Add New Product</a>
  	</header>
  	 	<div class="card">
  		<div class="card-body">
		
		<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Uploaded Date</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
          
   <?php
		$db= new functions();
		$res = $db->fechpro();
    while($row = mysqli_fetch_assoc($res))
	{
	
		?>
            <tr>
                <td><?php echo $row['pname']; ?></td>
                <td><?php 				$cdd = $row['pcategory'];				$res2 = $db->fechcatid($cdd);               $row2 = mysqli_fetch_assoc($res2);				echo $row2['cname']; ?></td>
                <td><?php echo $row['pprice']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
				<button class="btn btn-danger btn--icon btn-status" onclick="deletepr(<?php echo $row['id']; ?>)" data-id="453" data-status="1"><i class="zmdi zmdi-delete"></i></button>
			
					
				</td>
            </tr>
	<?php } ?>
        </tbody> 
    </table>
		
		
  		
  			<br>
  			
  		</div>
  	</div>
  
  </section>
  
        </main>

       <?php include('includes/footer.php'); ?>
	 	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 

  <script>
	  $(document).ready(function() {
    $('#example').DataTable();
} );
	   </script>