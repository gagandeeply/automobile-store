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

function createcat()

{

    var cname= $("#cname").val();



	 

	 if(cname != '')

	{

      var UrlToPass = 'action=create_cat&cname='+cname;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 var status=$.trim(status); 

			if(status=='1')

			{

				alert('Category created Successfully');

				document.location.href = "https://kavity.co/admin/categories.php"

			}

			else if(status=='2')

			{

				$("#error").html('Category Already in Use!');

			}

			else

			{

				$("#error").html('Something Went Wrong Please try Again!');

			}

				

            }

        });

	}

	else

	{

		$("#error").html('All Field Required !')

	}

	

}

function deletecat(cid)
{
	
	if (confirm('Are you sure you want to delete this ?')) {
	
		
      $.ajax({
            type: "POST",
            url  : 'process/process.php?action=removecat&id='+cid,
         	success: function(status){ 

		 var status=$.trim(status); 
			if(status=='1')
			{
			
				alert('Category Deleted Successfully');
                 location.reload();
				}
else
{
	alert('Some Error');
}	
				}
            });
       
	} 
}
function deletepr(cid)
{
	
	if (confirm('Are you sure you want to delete this ?')) {
	
		
      $.ajax({
            type: "POST",
            url  : 'process/process.php?action=removepr&id='+cid,
         	success: function(status){ 

		 var status=$.trim(status); 
			if(status=='1')
			{
			
				alert('Product Deleted Successfully');
                 location.reload();
				}
else
{
	alert('Some Error');
}	
				}
            });
       
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
                alert('Register Successfully Welcome');
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

function createemployee()

{

	var org_id = $("#organization_id").val();

	var emp_id = $("#employee_no").val();

	

	if(org_id != '' && emp_id != '')

	{

		     var UrlToPass = 'action=cemployee&org_id='+org_id+'&emp_id='+emp_id;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 var status=$.trim(status); 

				

			if(status=='1')

			{

				alert('Employee Created Successfully');

				document.location.href = "https://kavity.co/admin/dashboard"

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



function dowemp(oid)

{

	if(oid !='')

	{

		  var UrlToPass = 'action=dempl&oid='+oid;

	$.ajax({ 

			type : 'POST', 

			data : UrlToPass, 

			url  : 'process/process.php',

			 success: function (status) {

				 window.open('https://kavity.co/admin/organization_details?id='+oid,'_blank' );

			 }

			

        });

	}

	else

	{

		$("#error").html('Something Went Wrong Please try Later !')

	}

}