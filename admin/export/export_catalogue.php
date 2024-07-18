<?php
include('../db-conn.php');
	$sql="select * from   nxte_catalogue_enquiry";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>Customer Name</td><td>Email</td><td>Contact Number</td><td>Type</td><td>Customer Country</td><td>customer State</td><td>customer City</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['customer_name'].'</td><td>'.$row['customer_email'].'</td><td>'.$row['customer_number'].'</td><td>'.$row['customer_type'].'</td><td>'.$row['customer_country'].'</td><td>'.$row['customer_state'].'</td><td>'.$row['customer_city'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Catalogue Enquiry.xls');
echo $export;

?>