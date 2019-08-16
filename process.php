<?php
// get values from form in login.php file
$fullname=$_POST["user"];
$password=$_POST["pass"];
//to prevent mysql injection
$fullname=stripcslashes($fullname);
$password=stripcslashes($password);
$fullname=mysql_real_escape_string($fullname);
$password=mysql_real_escape_string($password);
//connect to the server and select dtabase
mysql_connect("localhost","root","");
mysql_select_db("pe_voda_idea");
//query the database for user
$result =mysql_query("select * from userlogin where username='$fullname' and password ='$password'")
or die("failed to query database" .mysql_error());
$row =mysql_fetch_array($result);
if($row['username']==$fullname && $row['password']==$password)
{
    echo "<script> alert ('login successful!!! welcome') </script>";
    header("location:peplanner.php"); 
}
  else
	  {
					echo "<script>alert ('invalid username/password')</script>";
				}
				


?>


