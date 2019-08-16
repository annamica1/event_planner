<?php
  $conn=mysqli_connect("localhost","root","","pe_voda_idea");
  if(!$conn)
	  die("cannot connect to the server");
?>


<form action="#" method="POST">
	<input type="submit" name="submit" value='submit'>
</form>



<?php 

if(isset($_POST['submit']))
{

print_r("expression");
$data = $_POST['html'];
header('Content-Type: application/vnd.ms-excel');

header("Content-disposition: attachment; filename= ".rand().".xls");


$sql = "SELECT * FROM `plan_event` WHERE 1";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

$html = '<table>
	<tr>
		<th>id</th>
		<th>PE_Owner</th>
		<th>Department</th>
		<th>Date</th>
		<th>Timefrom</th>
		<th>Timeto</th>
		<th>Location</th>
		<th>Impact_operation</th>
		<th>Impact_region</th>
		<th>Tester</th>
		<th>status</th>
	</tr>'; 

$i = 0;
$str = '';
while($i<$count)
{
	$row = mysqli_fetch_array($result);
	$str = $str.'<tr>
	<th>'. $row["id"] .'</th>
	<th>'. $row["PE_Owner"] .'</th>
	<th>'. $row["Department"] .'</th>
	<th>'. $row["Date"] .'</th>
	<th>'. $row["Timefrom"] .'</th>
	<th>'. $row["Timeto"] .'</th>
	<th>'. $row["Location"] .'</th>
	<th>'. $row["Impact_operation"] .'</th>
	<th>'. $row["Impact_region"] .'</th>
	<th>'. $row["Tester"] .'</th>
	<th>'. $row["status"] .'</th>
</tr>';
$i = $i+1;
}

$str = $str.'</table>';

$data = $html.$str;

echo $data;

}
?>
