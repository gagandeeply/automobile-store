function login()

{   

    var uname= $("#email").val();

	var pssw = $("#password").val();

	

	if(uname != '' && pssw != '')

	{

      var UrlToPass = 'action=login&uname='+uname+'&pssw='+pssw;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 var status=$.trim(status); 

			if(status=='1')

			{

				document.location.href = "https://kavity.co"

			}

			else

			{

				$("#error").html('Invalid credentials !')

			}

				

            }

        });

	}

	else

	{

		$("#error").html('All Field Required !')

	}

}




function registers()
{
	var fname = $("#fname").val(); 
	var email = $("#email").val();
	var phone = $("#phone").val();
	var passw = $("#passw").val();
	
	if(fname != '' && email != '' && phone != '' && phone != '')

	{

      var UrlToPass = 'action=regi&fname='+fname+'&email='+email+'&phone='+phone+'&passw='+passw;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 var status=$.trim(status); 
            if(status=='2')
			{
				$("#error").html('Email Already Exist!');
			}
			else if(status=='1')

			{
               $("#error").html('Register Successfully Welcome');
				document.location.href = "https://kavity.co"

			}

			else

			{

				$("#error").html('Invalid credentials !');

			}

				

            }

        });

	}

	else

	{

		$("#error").html('All Field Required !')

	}
}

function bdrive(x)
{
	
	var name = $("#name"+x).val(); 
	var pnumber = $("#pnumber"+x).val();
	var address = $("#address"+x).val();
	var bdate = $("#bdate"+x).val();
	
	
	if(name != '' && pnumber != '' && address != '' && bdate != '')

	{

      var UrlToPass = 'action=bodrive&name='+name+'&pnumber='+pnumber+'&address='+address+'&id='+x+'&bdate='+bdate;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {
		
				var status=$.trim(status); 
			
           
			//$("#errorsu"+x).html('Your Booking Submit Successfully!')
			//    $("#name"+x).val('');
			//	$("#pnumber"+x).val('');
			//	$("#address"+x).val('');
			//	$("#bdate"+x).val('');
				document.location.href = "https://kavity.co/shop.php"

				

            }

        });

	}

	else

	{

		$("#error"+x).html('All Field Required !')

	}
}
function createorder()

{
	var payoption = $('input[name=payoption]:checked').val();

	var pid = $("#proid").val();
	var pname = $(".product_name").text();
	var proprice = $("#proprice").text();
	var color = $("#color").val();
	var tire = $("#tire").val();
	var interior = $("#interior").val();
	var firstName = $("#firstName").val();
	var lastName = $("#lastName").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	var address = $("#address").val();
	var address2 = $("#address2").val();
	var country = $("#country").val();
	var state = $("#state").val();
	var zip = $("#zip").val();
	var quantity_input = $("#quantity_input").val();
	var downp = $("#downp").val();
	var downmonth = $("#downmonth").val();
	
	if(firstName != '' && lastName != '' && phone != '' && email != '' && address != '' && country != '' && state != '' && zip != '')

	{
 
      var UrlToPass = 'action=create_order&pid='+pid+'&pname='+pname+'&payoption='+payoption+'&proprice='+proprice+'&color='+color+'&tire='+tire+'&interior='+interior+'&firstName='+firstName+'&lastName='+lastName+'&phone='+phone+'&country='+country+'&state='+state+'&zip='+zip+'&quantity_input='+quantity_input+'&email='+email+'&address='+address+'&address2='+address2+'&downp='+downp+'&downmonth='+downmonth;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 var status=$.trim(status); 
          if(status=='1')

			{
                $("#error").html('Your Order Placed Successfully');
				document.location.href = "https://kavity.co/shop.php"

			}

			else

			{

				$("#error").html('Invalid credentials !');

			}

				

            }

        });

	}

	else

	{

		$("#error").html('All Field Required !')

	}
}





