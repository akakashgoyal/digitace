<?php
include('../db-conn.php');
	$sql="select * from nxte_subscribe";
$result=mysqli_query($conn,$sql);
$export='<table><tr><td>User Email</td></tr>';
while($row=mysqli_fetch_assoc($result)){
	$export.='<tr><td>'.$row['user_emails'].'</td></tr>';
}
$export.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=subscribers.xls');
echo $export;

?>