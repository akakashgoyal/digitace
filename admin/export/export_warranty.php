<?php
include('../db-conn.php');
	$sql="select * from  nxte_register_warranty";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>Customer Name</td><td>Email</td><td>Contact Number</td><td>Type</td><td> Category</td><td>Model</td><td>Battery Type</td><td>Purchase Date</td><td>Customer Country</td><td>customer State</td><td>customer City</td><td>Dealer Name</td><td>Dealer Address</td><td>Warranty Invoice</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['customer_name'].'</td><td>'.$row['customer_email'].'</td><td>'.$row['customer_number'].'</td><td>'.$row['vehicle_type'].'</td><td>'.$row['vehicle_category'].'</td><td>'.$row['vehicle_model'].'</td><td>'.$row['battery_type'].'</td><td>'.$row['purchase_date'].'</td><td>'.$row['customer_country'].'</td><td>'.$row['customer_state'].'</td><td>'.$row['customer_city'].'</td><td>'.$row['dealer_name'].'</td><td>'.$row['dealer_address'].'</td><td>'.$row['warranty_invoice'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Warranty Enquiry.xls');
echo $export;

?>