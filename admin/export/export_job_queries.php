<?php
include('../db-conn.php');
$sql = "SELECT * FROM nxte_job_queries";
$result = mysqli_query($conn, $sql);

$export = '<table>
<tr>
    <td>S.No</td>
    <td>Candidate Name</td>
    <td>Email</td>
    <td>Contact Number</td>
    <td>Total Experience</td>
    <td>Current Company</td>
    <td>Current Profile</td>
    <td>Bio</td>
    <td>Resume</td>
    <td>Added On</td>
</tr>';

$sno = 1;
while ($row = mysqli_fetch_assoc($result)) {
    $export .= '<tr>
        <td>'.$sno++.'</td>
        <td>'.$row['candidate_name'].'</td>
        <td>'.$row['candidate_email'].'</td>
        <td>'.$row['candidate_number'].'</td>
        <td>'.$row['total_experience'].'</td>
        <td>'.$row['current_company'].'</td>
        <td>'.$row['current_profile'].'</td>
        <td>'.$row['bio'].'</td>
        <td>'.$row['upload_resume'].'</td>
        <td>'.$row['added_on'].'</td>
    </tr>';
}
$export .= '</table>';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename=Job_Queries.xls');
echo $export;
?>
`