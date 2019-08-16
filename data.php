<?php 
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
$conn = mysqli_connect('localhost','root','','pe_voda_idea') or die(mysqli_error($conn));
$institute=1001;

?> 


<?php 

if(isset($_SESSION['filename']) !='' && file_exists($_SESSION['filename']))
{
	$session_file = $_SESSION['filename'];

	$session_file_arr = explode('-',$session_file);
	if($session_file_arr[1]<time())
	{
		// print_r($session_file);
		// print_r($session_file_arr[1]);
		//Generate Local JSON File 

		$response = array();

		$qry = "SELECT * FROM `plan_event` WHERE 1";

		$result =  mysqli_query($conn,$qry) or die(mysqli_error($conn));

		$rows_count=mysqli_num_rows($result);

		if($rows_count==0){
			echo "0";
		}
		else
		{	
			$i=0;
			while($row = mysqli_fetch_assoc($result))
			{
				$response[$i] = $row;
				$i=$i+1;
			}

			$file_name=$institute.'-'.(time()+1800).'-0';
			$response = json_encode($response,1000);
			$_SESSION['filename'] = $file_name.".json";
			$fp = fopen("$file_name".'.json', 'w');
			fwrite($fp,$response);
			fclose($fp);
			
			
		}
	}
}
else
{
		$response = array();

		$qry = "SELECT * FROM `plan_event` WHERE 1";

		$result =  mysqli_query($conn,$qry) or die(mysqli_error($conn));

		$rows_count=mysqli_num_rows($result);

		if($rows_count==0){
			echo "0";
		}
		else
		{	
			$i=0;
			while($row = mysqli_fetch_assoc($result))
			{
				$response[$i] = $row;
				$i=$i+1;
			}

			$file_name=$institute.'-'.(time()+1800).'-0';
			$response = json_encode($response,1000);
			$_SESSION['filename'] = $file_name.".json";
			$fp = fopen("$file_name".'.json', 'w');
			fwrite($fp,$response);
			fclose($fp);
			
		}
}
?>