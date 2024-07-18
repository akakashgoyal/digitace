<?php
include('../db-conn.php');
	$sql="select * from  nxte_testdrive";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>Customer Name</td><td>Email</td><td>Contact Number</td><td>Type</td><td> Category</td><td>Moel</td><td>Customer Country</td><td>customer State</td><td>customer City</td><td>customer Message</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['customer_name'].'</td><td>'.$row['customer_email'].'</td><td>'.$row['customer_number'].'</td><td>'.$row['customer_type'].'</td><td>'.$row['customer_category'].'</td><td>'.$row['customer_model'].'</td><td>'.$row['customer_country'].'</td><td>'.$row['customer_state'].'</td><td>'.$row['customer_city'].'</td><td>'.$row['customer_message'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Test Drive Enquiry.xls');
echo $export;

?>