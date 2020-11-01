<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>form</title>
<style>
/*#bg{
font-size:80px;
color:red;
}*/

</style>
</head>
<body>
<!--<div id="bg"><br>
<center>Tours & Travels</center><br>

</div>-->
				<div class="container-fluid">
                <div class="row">
					<div class="col-md-6"><img src="bg.jpg" width="700" height="1000"></div>
                    <div class="col-md-6">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                               <center> <h4>Take only memories, leave only footprints</h4></center>
                            </div>
							
							<div class="panel-body">
							<form id="regForm">
									<div class="form-group">
										<label for="Name">Name</label>
                                        <input type="text" class="form-control" name="Name" id="Name">
                                    </div>
									
									<div class="form-group">
										<label for="mobileNo">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobileNo" id="mobileNo">
                                    </div>
									
									<div class="form-group">
									  <label for="Address">Address:</label>
									  <textarea class="form-control" rows="5" name="Address" id="address" ></textarea>
									</div>
																	
									<div class="form-group">
										<label for="emailId">Email Id</label>
                                        <input type="email" class="form-control" name="emailId" id="emailId">
                                    </div>
							
									<div class="form-group">
										<label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" >
                                    </div>
									
								<h3>Select Tours</h3>
								<div class="radio">
								  <label><input type="radio" name="optradio" id="optradio"  value="Educational" >Educational Tour</label>
								
								  <label><input type="radio" name="optradio" id="optradio"  value="Devotional Tour">Devotional Tour</label>
								
								  <label><input type="radio" name="optradio" id="optradio"  value="World Tour">World Tour</label>
								</div>
								<br>
								<h3>Select Travels </h3>

								 <div class="checkbox">
									  <label><input type="checkbox" name="check[]" id="optcheckbox" value="Aeroplane" >Aeroplane</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="check[]" id="optcheckbox" value="LuxuryBus">Luxury Bus</label>
									</div>
									<div class="checkbox ">
									  <label><input type="checkbox"  name="check[]" id="optcheckbox" value="Train">Train</label>
									</div>
									<div class="checkbox ">
									  <label><input type="checkbox" name="check[]" id="optcheckbox"  value="CruiseShip">Cruise Ship</label>
									</div>
									<br>
									<div class="form-group">
									<h3>Select Tour Package</h3>
									  <select class="form-control" id="sel1" name="Budget">
										<option>10000-20000</option>
										<option>21000-35000</option>
										<option>35000-50000</option>
										<option>More than 50000</option>
									  </select><br><br>	
									<div class="msg">
									
									</div>
																			
											<center><button type="submit" name="submit" id="btn" class="btn btn-primary">Submit</button></center>													
								       </div>
							</form>
							</div>
					</div>
					
				</div>
			</div>
		
		</div>

<script src="script.js"></script>
</body>
</html>