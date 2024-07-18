<?php
include('../db-conn.php');
	$sql="select * from nxte_enquiry";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>Customer Name</td><td>Email</td><td>Contact Number</td><td>Address</td><td>Message</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['customer_name'].'</td><td>'.$row['customer_email'].'</td><td>'.$row['customer_number'].'</td><td>'.$row['customer_address'].'</td><td>'.$row['customer_message'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Enquiry.xls');
echo $export;

?>