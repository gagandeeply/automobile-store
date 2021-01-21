function login()
{   
    var uname= $("#username").val();
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
				document.location.href = "https://kavity.co/admin/dashboard.php"
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
				$("#error").html('Category created Successfully');
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
function deleteur(cid)
{	
				
$.ajax({       
     type: "POST",    
	 url  : 'process/process.php?action=removeuser&id='+cid,    
	 success: function(status)
	 { 		
	 var status=$.trim(status); 	
	 if(status=='1')		
		 {						
	// alert('User Deleted Successfully');      
	 location.reload();			
	 }
	 else
	 {	
 alert('Some Error');
 }				
 }        
 });       
  
 }
	function empinact(eid)
{
			  
    $.ajax({        
    type: "POST",       
	url  : 'process/process.php?action=inactemp&id='+eid,    
	success: function(status){ 	
	
	var status=$.trim(status); 		
	if(status=='1')		
		{					
	//alert('User Inactive Successfully');     
	location.reload();			
	}
	else
	{	
alert('Some Error');
}					
}        
    });     
  	 
	} 
	 
	function empact(eid)
{
				  
    $.ajax({        
    type: "POST",       
	url  : 'process/process.php?action=actemp&id='+eid,    
	success: function(status){ 	
	
	var status=$.trim(status); 		
	if(status=='1')		
		{					
	//alert('User Active Successfully');     
	location.reload();			
	}
	else
	{	
alert('Some Error');
}					
}        
    });     
  	
	}
function deletecat(cid)
{	
				
$.ajax({       
     type: "POST",    
	 url  : 'process/process.php?action=removecat&id='+cid,    
	 success: function(status)
	 { 		
	 var status=$.trim(status); 	
	 if(status=='1')		
		 {						
	 //alert('Category Deleted Successfully');       
	 location.reload();			
	 }
	 else
	 {	
 alert('Some Error');
 }				
 }        
 });       
 
 }
 function deletepr(cid)
 {		
		    
 $.ajax({        
 type: "POST",     
 url  : 'process/process.php?action=removepr&id='+cid,  
 success: function(status)
 { 	
 var status=$.trim(status); 
 if(status=='1')		
	 {					
 //alert('Product Deleted Successfully');   
 location.reload();			
 }
 else
 {	
alert('Some Error');
}				
	}          
	});      
 	
	}
	
	function accept_order(oid)
 {		
		    
 $.ajax({        
 type: "POST",     
 url  : 'process/process.php?action=acc_order&id='+oid,  
 success: function(status)
 { 	
 var status=$.trim(status); 
 if(status=='1')		
	 {					
 //alert('Product Deleted Successfully');   
 location.reload();			
 }
 else
 {	
alert('Some Error');
}				
	}          
	});      
 	
	}
	function reject_order(oid)
 {		
		    
 $.ajax({        
 type: "POST",     
 url  : 'process/process.php?action=rej_order&id='+oid,  
 success: function(status)
 { 	
 var status=$.trim(status); 
 if(status=='1')		
	 {					
 //alert('Product Deleted Successfully');   
 location.reload();			
 }
 else
 {	
alert('Some Error');
}				
	}          
	});      
 	
	}
	


