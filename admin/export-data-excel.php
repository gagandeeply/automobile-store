<?php 
$conn = new mysqli('localhost', 'thegame', 'hardwork@123');  
mysqli_select_db($conn, 'thegame');
 $kkr = $_REQUEST['kkr'];

	
 	$sql = "select `id`,`username`,`email`,`password` from `employee` where `org_id`='$kkr'";

	$setRec = mysqli_query($conn, $sql);  
	$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "User Name" . "\t" . "Email" . "\t" . "Password" . "\t"; 
$setData = ''; 
	
    while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";

?>