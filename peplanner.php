<?php 
include("pe_connect.php");   ?>
<html>
    <head>
	     <title>PE planner</title>
	   <meta charset="UTF-8">
		 <meta http equiv="X-UA_Compatiable" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  

 
	     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

	 </head>
	 <style>
	 		  #HeaderSection .navbar
{
    background-image:linear-gradient(to right,orange,grey);
    border-bottom: white 03px solid;
}

#HeaderSection .navbar-name
{
    color:white;
}

#Footer .row
{
    
    float: inherit;
    margin-bottom: 0;
	text-align: center;
}
	
body
{
    font-family: sans-serif;
    background: no-repeat center  center fixed;

}

#MainSection .container
{
    color:white;
    background-color:rgba(3, 19, 105, 0.959);
    padding:0;
    width:600px;
    min-width:320px;
    height:1100px;
}

.main-section
{
    
    padding:5px;
}

.modal-content
{
    background-color:#434e5a;
    opacity: .8;
    padding: 0 25px;
    border-radius: 10px;
}

.form-group
{
    margin-bottom:25px;
}

.form-group input
{
    height:38px;
    border-radius:5px;
    border:0;
    font-size: 18px;
    letter-spacing: 2px;

}

.font-input button
{
    width:40px;
    margin:5px 0 25px;
}

.btn-primary
{
    background-color: #1c6288;
    font-size: 19px;
    border-radius: 5px;
    padding:7px 14px;
    border: 1px solid #daf1ff;
}

.btn-primary:hover
{
    background-color: #13445e;
    border: 1px solid #daf1ff;
}
.forget
{
    padding: 5px 0 25px;
}

  </style>
	 	
	 </style>
		 
<body>
     
<!--Navigation-->
	 <header id="HeaderSection">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-3">
            <div class="container-fluid">
                <div class="navbar-name">
                    <h2>Event Planner</h2>
                </div>

            </div>
        </nav>
    </header>


    
 <!--Form Section-->
 <div id="MainSection">
     <div class="container">
         <div class="row">
             <div class="col-xs-7 col-sm-8 col-md">
                 <div mt-4>
             <div class="modal-dialog text-center">
                            <div class="col-xs-5 col-sm-6 col-md main-section">
                                <div class="modal-heading">
                                   <div class="col-12">
                                    <h2>Plan Event</h2>
                                   </div> 
                                </div>
                                <br>
                                <div class="modal-content">
                                    <div class="col-xs-3 col-sm-4 col-md form-input">
                                        <form  autocomplete="off" method ="post" action="#">
                                            <div class="form-group text-white text-left">
                                            <div class="col-12 forgot">
                                            
                                            </div>   
                                            <label> PE Owner:</label> 
                                             <input class="form-control" type ="text" name ="t1" id="text1"value =""
				placeholder ="Enter your name here"  required>
<br>
				<label>Department:</label>
				    <select class="form-control" name ="dep"id="t1">
				    	 <option value ="select department">Select Department</option>
				    <option value ="core">Core</option>
				    <option value ="IN">IN</option>
				    <option value ="radio ">Radio</option>
				    <option value ="radio planning">Radio Planning</option>
					</select>
<br>					          

<label >Date:</label> 
<input class="form-control"  type="text" id="datepicker" name="date">
	
			<label for="appt">Time:</label>
			<small>From</small>
				<input class="form-control" type="time" id="appt" name="t2"
      		 	min="0:00" max="24:00" required>

			<label for="appt">Time:</label>
			<small>To</small>
				<input class="form-control" type="time" id="appt" name="t3"
      		 	min="0:00" max="24:00" required>
<br>
	        <label>Location:</label>
				    <select class="form-control" name ="loc"id="t1">
				    	 <option value ="select department">Select Location</option>
				    <option value ="siliguri">Siliguri</option>
				    <option value ="durgapur">Durgapur</option>
				    <option value ="srijan tech park ">Srijan Tech Park</option>
				    <option value ="agarpara">Agarpara</option>
					</select>
<br>					
			<label>Impact-operation:</label>
				    <select class="form-control" name ="imop"id="t1">
				    	 <option value ="select department">Select Impact-operation</option>
				    <option value ="voice">Voice</option>
				    <option value ="date">Data</option>
				    <option value ="SMS">SMS</option>
					</select>         
<br>
			<label>Impact-region:</label>
				    <select class="form-control" name ="imre"id="t1">
				    	 <option value ="select department">Select Impact-region</option>
				    <option value ="NB">NB</option>
				    <option value ="SB">SB</option>
				    <option value ="Kolkata">Kolkata</option>
					</select>         
<br>
				<label>Tester:</label>
				<input class="form-control" type ="text" name ="t5" id="text1"value =""
				placeholder ="Tester name here" >
<br>
                </div>
        		<button class="btn btn-primary " name="t10" type="submit">Submit</button>
      		            
	   
                                            
                                        </form>
                                        <label>To download Database in Excel click <form method ="POST"action="excel.php">
	   
	<input type="submit" name="submit" value='DOWNLOAD'>
	   </form></label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
             </div>
         </div>
     </div>
 </div>
    
 <!--Footer-->

</body>
</html>



			
	
	   
			<?php

		  if(isset($_POST["t10"]))
		  {
		        $PE_Owner=$_POST["t1"];
				
			   	$Department=$_POST["dep"];
				
				$Date=$_POST["date"];

				$Timefrom=$_POST["t2"];
				$Timeto=$_POST["t3"];

				$Location=$_POST["loc"];
				
                $Impactop=$_POST["imop"];
                    $Impactre=$_POST["imre"];
				
                $Tester=$_POST["t5"];
                
                $time1 = strtotime($Timefrom);  
                $time2 = strtotime($Timeto);
                
                $diff = abs($time1 - $time2)/60; 
           
            
				
				   $fetch_query = "SELECT `id` FROM `plan_event` WHERE `Department`= '$Department'
				AND `Location`= '$Location' AND `Timefrom`>= '$Timefrom' AND `Timeto`<= '$Timeto'AND
                `Impact_operation` = '$Impactop' AND `Impact_region` = '$Impactre' AND status = 1";
                
                $fetch_query1 = "SELECT `id` FROM `plan_event` WHERE `Timefrom`<= '$Timefrom' AND `Timeto`>= '$Timeto'AND `Date` = '$Date' AND status = 1";

				$result=mysqli_query($con,$fetch_query);
                $row=mysqli_fetch_array($result);
                
                $result2=mysqli_query($con,$fetch_query1);
				$row2=mysqli_fetch_array($result2);
		
				if($row['id']> 0){
					echo"<script>alert('This slot is already exist. Try another one!')</script>";

                }
                elseif($row2>0){
                    echo"<script>alert('This slot is already exist. Try another one!')</script>";
                }
                else {

					$qry = "INSERT INTO `plan_event` (`PE_Owner`, `Department`, `Date`, `Timefrom`,`Timeto`,`duration`, `Location`, `Impact_operation`,`Impact_region`, `Tester`,`status`)
				VALUES ('$PE_Owner', '$Department', '$Date', '$Timefrom','$Timeto','$diff','$Location', '$Impactop','$Impactre', '$Tester',1)";

				$n=mysqli_query($con,$qry);

				if($n==1)
				{
				 echo"<script>alert('Your slot is booked . Thankyou!!')</script>";
				}
				else
				{
					echo"<script>alert('Error, Please try again!!')</script>";
				}
				
		  }
		 }
		?>
		
	                
