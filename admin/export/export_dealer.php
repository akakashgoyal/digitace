<?php
include('../db-conn.php');
	$sql="select * from  nxte_becomedealer";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>Customer Name</td><td>Email</td><td>Contact Number</td><td>Customer Bussiness</td><td>customer Investment</td><td>customer Experience</td><td>Turnover</td><td>customer Country</td><td>customer State</td><td>customer City</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['customer_name'].'</td><td>'.$row['customer_email'].'</td><td>'.$row['customer_number'].'</td><td>'.$row['customer_bussiness'].'</td><td>'.$row['customer_investment'].'</td><td>'.$row['customer_experience'].'</td><td>'.$row['customer_turnover'].'</td><td>'.$row['customer_country'].'</td><td>'.$row['customer_state'].'</td><td>'.$row['customer_city'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Dealers Enquiry.xls');
echo $export;

?>