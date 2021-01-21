<?php include('includes/header.php'); 
error_reporting(0);
	$db= new functions();
	$pid = $_REQUEST['id'];
?>

<style>
.breadcrumb-item+.breadcrumb-item::before {
    content: ">"
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .1rem 0rem !important;
    margin-bottom: 0rem;
    list-style: none;
    background-color: #ffffff;
    border-radius: .25rem
}

.single_product {
    padding-top: 66px;
    background-color: #e5e5e5;
    margin-top: 0px;
    padding: 17px
}

.product_name {
    font-size: 20px;
    font-weight: 400;
    margin-top: 0px
}

.badge {
    display: inline-block;
    padding: 0.50em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.product-rating {
    margin-top: 10px
}

.rating-review {
    color: #5b5b5b
}

.product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 9px;
    clear: left
}

.product_discount {
    display: inline-block;
    font-size: 17px;
    font-weight: 300;
    margin-top: 9px;
    clear: left;
    margin-left: 10px;
    color: red
}

.product_saved {
    display: inline-block;
    font-size: 15px;
    font-weight: 200;
    color: #999999;
    clear: left
}

.singleline {
    margin-top: 1rem;
    margin-bottom: .40rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.product_info {
    color: #4d4d4d;
    display: inline-block
}

.product_options {
    margin-bottom: 10px
}

.product_description {
    padding-left: 0px
}

.product_quantity {
    width: 104px;
    height: 47px;
    border: solid 1px #e5e5e5;
    border-radius: 3px;
    overflow: hidden;
    padding-left: 8px;
    padding-top: -4px;
    padding-bottom: 44px;
    float: left;
    margin-right: 22px;
    margin-bottom: 11px
}

.order_info {
    margin-top: 18px
}

.shop-button {
    height: 47px
}

.product_fav i {
    line-height: 44px;
    color: #cccccc
}

.product_fav {
    display: inline-block;
    width: 52px;
    height: 46px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.br-dashed {
    border-radius: 5px;
    border: 1px dashed #dddddd;
    margin-top: 6px
}

.pr-info {
    margin-top: 2px;
    padding-left: 2px;
    margin-left: -14px;
    padding-left: 0px
}

.break-all {
    color: #5e5e5e
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

@media (max-width: 390px) {
    .product_fav {
        display: none
    }
}

.bbb_combo {
    width: 100%;
    margin-right: 7%;
    padding-top: 21px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 24px;
    border-radius: 5px;
    margin-top: 0px;
    text-align: -webkit-center
}

.bbb_combo_image {
    width: 170px;
    height: 170px;
    margin-bottom: 15px
}

.fs-10 {
    font-size: 10px
}

.step {
    background: #167af6;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 6.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 3.6em;
    margin-right: 5px;
    text-align: center;
    width: 3.6em;
    margin-top: 116px
}

.row-underline {
    content: "";
    display: block;
    border-bottom: 2px solid #3798db;
    margin: 0px 0px;
    margin-bottom: 20px;
    margin-top: 15px
}

.deal-text {
    margin-left: -10px;
    font-size: 25px;
    margin-bottom: 10px;
    color: #000;
    font-weight: 700
}

.padding-0 {
    padding-left: 0;
    padding-right: 0
}

.padding-2 {
    margin-right: 2px;
    margin-left: 2px
}

.vertical-line {
    display: inline-block;
    border-left: 3px solid #167af6;
    margin: 0 10px;
    height: 364px;
    margin-top: 4px
}

.p-rating {
    color: green
}

.combo-pricing-item {
    display: flex;
    flex-direction: column
}

.boxo-pricing-items {
    display: inline-flex
}

.combo-plus {
    margin-left: 10px;
    margin-right: 18px;
    margin-top: 10px
}

.add-both-cart-button {
    margin-left: 36px
}

.items_text {
    color: #b0b0b0
}

.combo_item_price {
    font-size: 18px
}

.p_specification {
    font-weight: 500;
    margin-left: 22px
}

.mt-10 {
    margin-top: 10px
}

@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #FFFFFF;
    color: #000000
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

ul {
    list-style: none;
    margin-bottom: 0px
}

.single_product {
    padding-top: 16px;
    padding-bottom: 140px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

.image_list li:last-child {
    margin-bottom: 0
}

.image_list li:hover {
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3)
}

.image_list li img {
    max-width: 100%
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_selected img {
    max-width: 100%
}

.product_category {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5)
}

.product_rating {
    margin-top: 7px
}

.product_rating i {
    margin-right: 4px
}

.product_rating i::before {
    font-size: 13px
}

.product_text {
    margin-top: 27px
}

.product_text p:last-child {
    margin-bottom: 0px
}

.order_info {
    margin-top: 16px
}

.product_quantity {
    width: 182px;
    height: 50px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    overflow: hidden;
    padding-left: 25px;
    float: left;
    margin-right: 30px
}

.product_quantity span {
    display: block;
    height: 50px;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    line-height: 50px;
    float: left
}

.product_quantity input {
    display: block;
    width: 30px;
    height: 50px;
    border: none;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    text-align: left;
    padding-left: 9px;
    line-height: 50px;
    float: left
}

.quantity_buttons {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 29px;
    border-left: solid 1px #e5e5e5
}

.quantity_inc,
.quantity_dec {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 50%;
    cursor: pointer
}

.quantity_control i {
    font-size: 11px;
    color: rgba(0, 0, 0, 0.3);
    pointer-events: none
}

.quantity_control:active {
    border: solid 1px rgba(14, 140, 228, 0.2)
}

.quantity_inc {
    padding-bottom: 2px;
    justify-content: flex-end;
    border-top-right-radius: 5px
}

.quantity_dec {
    padding-top: 2px;
    justify-content: flex-start;
    border-bottom-right-radius: 5px
}
</style>
<style>#outer{width:90%;max-width:600px;background:#fff;text-align:center;margin:0 auto;font-weight:500;}
#cover{border:2px solid #007bff;padding:15px 0}
.main{table-layout:fixed;width:94%;border:0;border-collapse:collapse;margin:0 auto;}
.main td{color: #4d4d4d;padding:0 8px;vertical-align:middle;text-align:left;border:0;font:500 16px arial}
.main input{width:100%;border:1px solid #007bff;margin:2px 0;padding:0 2%;height:22px;text-align:right;font-weight:400;font-size:14px;}
.main select{width:100%;border:1px solid #ccc;margin:2px 0;background:#fff;height:22px;font-weight:400;font-size:14px;}.w50{width:50%}.main button{    border: 1px solid #fff;color: #fff;padding: 8px;background: #0e82ff;width:100%;font-weight:500;margin:3px 0;}</style>

<?php 
	$resh = $db->fechproid($pid);
	$rowh = mysqli_fetch_assoc($resh);
	$cid = $rowh['pcategory'];
	$reshy = $db->fechcatid($cid);
	$rowhy = mysqli_fetch_assoc($reshy);
	?>
<div class="super_container">

    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
            
            
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="https://kavity.co/admin/uploads/<?php echo $rowh['pimage']; ?>" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://kavity.co">Home</a></li>
                                <li class="breadcrumb-item"><a href="https://kavity.co/shop.php">Products</a></li>
                                <li class="breadcrumb-item active"><?php echo $rowhy['cname']; ?></li>
                            </ol>
                        </nav>
                        <div class="product_name"><?php echo $rowh['pname']; ?></div>
                        <div> <span class="product_price">$ <span id="proprice"><?php echo $rowh['pprice']; ?></span></span>  </div>
                  <input type="hidden" value="<?php echo $rowh['pprice']; ?>" id="pmainpr" />
				   <input type="hidden" value="<?php echo $rowh['id']; ?>" id="proid" />
                        <hr class="singleline">
                        <div> <span class="product_info"><?php echo $rowh['pdescription']; ?><div>
                        <div>
                        
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Choose Color</span><br> 
								<select id="color" style="width: 182px;height: 50px;border: solid 1px #e5e5e5;border-radius: 5px; overflow: hidden;padding-left: 25px;float: left;margin-right: 30px;">
								<option value="Red" >Red</option>
								<option value="Black" >Black</option>
								<option value="Blue" >Blue</option>
								</select>
								</div>
                                <div class="col-xs-6"  style=""> <span class="product_options">Choose Tire</span><br> 
								<select id="tire" style="width: 182px;height: 50px;border: solid 1px #e5e5e5;border-radius: 5px; overflow: hidden;padding-left: 25px;float: left;margin-right: 30px;">

								<option value="Black Rims" >Black Rims</option>
								<option value="Silver Rims" >Silver Rims</option>
								</select>
								</div>
								   <div class="col-xs-6" style=""> <span class="product_options">Choose Interior</span><br> 
								<select  id="interior" style="width: 182px;height: 50px;border: solid 1px #e5e5e5;border-radius: 5px; overflow: hidden;padding-left: 25px;float: left;margin-right: 30px;">

								<option value="Leather" >Leather</option>
								<option value="Satin" >Satin</option>
								</select>
								</div>
                            </div>
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="margin-left: 13px;">
                                <div class="product_quantity"> <span>QTY: </span> <input id="quantity_input" onchange="proq();" style="width:100px;" type="number" min='1' pattern="[0-9]*" value="1">
                                 
                                </div>
                            </div>
                            <div class="col-xs-6"> <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary shop-button">Check Out Now</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
				  
            </div>
       <div id=outer>Financing EMI Calculator<div id=cover><form><table class=main><col class=w50><col class=w50><tr><td>Loan Amount<td><input id=loan1><tr><td>Repayment in months<td><input id=months1><tr><td>Interest Rate<td><input id=rate1 onchange=emi();><tr><td><button type=reset>Reset</button><td><button type=button onclick='emi()'>Submit</button><tr><td>EMI<td><input id=pay1><tr><td>Interest payable<td><input id=tintt1><tr><td>Total payable<td><input id=gt1></table></form></div></div>
  
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Checkout form</h5>
       
      </div>
      <div class="modal-body">
       <div class="container">
   
    <div class="row">
       
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Billing address</h4>
			<p id="error" style="color:red;"></p>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Phone</label>
                    <div class="input-group">
                     
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label> 
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                      <input type="text" class="form-control" id="country"  placeholder="Country" required="">
                            
                        <div class="invalid-feedback"> Please select a valid country. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="State"  required="">
                            
                        <div class="invalid-feedback"> Please provide a valid state. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="Zip" required="">
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
					 
					
					 <div class="col-md-5 mb-3">
                        <label for="zip">Payment Option</label>
						 <br />
                        <input type="radio"  id="payoption" name="payoption" value="Full Payment" checked > Full Payment <br />
						
						
						 <input type="radio"  id="payoption"  name="payoption"  value="Finance"> Finance <br />
						 
                     
                    </div>
                    
                    
                    
                    <br>
                    
                     <div class="mb-3">
                        <label for="zip">Downpayment (valid only if financing.  Will be disregarded in case of full payment.)</label>
                        <input type="text" class="form-control" id="downp" placeholder="Enter downpayment">
                        
                    </div>
                    
                    <div class="col-md-5 mb-3">
                        <label for="zip">Financing Months</label>
						 <br />
                        <input type="radio"  id="downmonth" name="downmonth" value="36" checked > 36 months <br />
						
						
						 <input type="radio"  id="downmonth"  name="downmonth"  value="72"> 72 months <br />
						 
						  <input type="radio"  id="downmonth"  name="downmonth"  value="0"> Not applicable (full payment) <br />
						 
                     
                    </div>
                    
                    
                    
                    
                    
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="createorder();">Order Now</button>
            </form>
        </div>
    </div>
  
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



<script>
function proq()
{
	var prop = $("#pmainpr").val();
	var qpr = $("#quantity_input").val();
	
	var proprice = Number(prop);
	

	
	var mainpr = (qpr * proprice);
	
	$("#proprice").html(mainpr);
	
}
</script>



<?php include('includes/footer.php'); ?>
<script>function emi(){if(document.getElementById('loan1').value==null || document.getElementById('loan1').value.length==0 || document.getElementById('months1').value==null || document.getElementById('months1').value.length==0 || document.getElementById('rate1').value==null || document.getElementById('rate1').value.length==0 ) {document.getElementById('pay1').value='Data Reqd.';}else {var pay1='';var princ1= document.getElementById('loan1').value;var term1= document.getElementById('months1').value;var intr1=document.getElementById('rate1').value / 1200;document.getElementById('pay1').value =Math.round(princ1 * intr1 / (1-(Math.pow(1/(1 + intr1), term1)))*100)/100; document.getElementById('gt1').value= Math.round((document.getElementById('pay1').value * document.getElementById('months1').value)*100)/100;document.getElementById('tintt1').value=Math.round((document.getElementById('gt1').value*1 - document.getElementById('loan1').value*1)*100)/100;}}
// Widget Code by https://karvitt.com/widgets/
</script>