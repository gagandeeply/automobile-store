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
  		<h1 class="float-left">Orders</h1>
  	
  	</header>
  	 	<div class="card">
  		<div class="card-body">
		
		<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Order By</th>
                <th>Product Name</th>
                <th>Total price</th>
				<th>Payment Type</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
          
   <?php
		$db= new functions();
		$res = $db->fechord();
    while($row = mysqli_fetch_assoc($res))
	{
	$uid = $row['user_id'];
	$orid = $row['id'];
	$status = $row['status'];
		?>
            <tr>
                <td><?php echo $row['id']; ?></td>
				 <td><?php  $resk = $db->fechusersid($uid);  $rowk = mysqli_fetch_assoc($resk)?><?php echo $rowk['name']; ?></td>
                <td><?php echo $row['pname']; ?></td>
                <td>$ <?php echo $row['proprice']; ?></td>
				 <td><?php echo $row['payoption']; ?></td>
                <td>
				<a href="https://kavity.co/admin/order_details.php?id=<?php echo $orid; ?>"><button class="btn btn-warning btn--icon btn-status" data-id="453" data-status="1"><i class="zmdi zmdi-eye"></i></button></a>
			 <?php
if($status == 1)
{ ?>
<a href="javascript:void();"><button class="btn btn-warning btn-status" data-id="453" data-status="1">Order Accepted</button> </a>

<?php }
else
{ ?> 
	<a href="javascript:void();" onclick="accept_order(<?php echo $orid; ?>);"><button class="btn btn-success btn-status" data-id="453" data-status="1">Accept Order</button> </a>
<?php }
			 ?>
		<a href="javascript:void();" onclick="reject_order(<?php echo $orid; ?>);"><button class="btn btn-danger btn-status" data-id="453" data-status="1">Reject Order</button></a>			
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