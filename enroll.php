<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Enroll</title>
		<link href="images/icon.png" rel="icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Cebu City</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="enroll.php">Enroll</a>
						<a href="login.html">Login</a>
						<a href="about.html">About</a>	
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h3>Republic of the Philippines</h3>
						<p style="color: black">Department of Labor and Employment<br>NATIONAL SKILLS REGISTRATION PROGRAM </p>
						<p style="font-size: 1.5em;color:skyblue"><ins>REGISTRATION FORM</ins></p>
					</header>
					<p style="margin:auto; color: black">INSTRUCTIONS:</p>
					<p style="color: black">Please fill up those fields do not leave it empty. Please input <span><ins>N/A</ins></span> if its not applicable. Every fields are required.</p>
					<!-- start of the forms -->
					
		<form  name="personalinfo_form" style="color: black">
			<fieldset>
				<legend><span style="font-weight: bold;">I.Personal Information</span></legend>
					First Name:<input style="max-width: 100%;text-align: center;" type="text" name="personalinfo_firstname" maxlength="20" placeholder="First Name" required >
						Middle Name:<input style="max-width: 100%;text-align: center;" type="text" name="personalinfo_middlename" maxlength="20" placeholder="Middle Name"required>
						Last Name:<input style="max-width: 100%;text-align: center;" type="text" name="personalinfo_lastname" maxlength="20" placeholder="Last Name"required>
						Suffix<br>
						<input type="radio" id="priority-low" name="suffix" value="JR" required >
							<label for="priority-low">Jr.</label>
						<input type="radio" id="priority-normal" name="suffix" value="SR" required>
							<label for="priority-normal">Sr.</label><br>
						<input type="radio" id="priority-high" name="suffix" value="III" required >
							<label for="priority-high">III</label>
						<input type="radio" id="priority-highest" name="suffix" value="null" required>
							<label for="priority-highest">None</label>
						<br>
						Age:<input style="max-width: 100%;text-align: center;" type="text" name="personalinfo_age" maxlength="2" placeholder="Age"required>
						<br>
						Date of Birth: <input type="Date" name="personalinfo_dateofbirth" required>
						<br>
						Gender:<br>
						<input type="radio" id="priority-male" name="personalinfo_gender" value="male" required>
							<label for="priority-male">Male</label>
						<input type="radio" id="priority-female" name="personalinfo_gender" value="female" required>
							<label for="priority-female">Female</label><br>
						Place of Birth: <input style="max-width: 100%;text-align: center;" type="text" name="personalinfo_placeofbirth" maxlength="50" placeholder="Place of Birth"required>
						Civil Status: <br>
						<input type="radio" id="priority-single" name="civilstatus" value="Single" required >
							<label for="priority-single">Single</label>
						<input type="radio" id="priority-married" name="civilstatus" value="Married" required>
							<label for="priority-married">Married</label>
						<input type="radio" id="priority-widowed" name="civilstatus" value="Widowed" required >
							<label for="priority-widowed">Widowed</label>
						<input type="radio" id="priority-separated" name="civilstatus" value="Separated" required>
							<label for="priority-separated">Separated</label>		
						<br>
						Present Address: <input style="max-width: 100%;text-align: center;" type="text" name="present_address" maxlength="50" placeholder="Present Address"required>
						House No./ Street Village: <input style="max-width: 100%;text-align: center;" type="text" name="present_houseno" maxlength="30" placeholder="House No./ Street Village:"required>	
						Barangay:  <input style="max-width: 100%;text-align: center;" type="text" name="present_barangay" maxlength="15" placeholder="Barangay" required>
						Municipality/City: <input style="max-width: 100%;text-align: center;" type="text" name="present_municipality" maxlength="15" placeholder="Municipality/City"required>	
						Province: <input style="max-width: 100%;text-align: center;" type="text" name="present_province" maxlength="15" placeholder="Province"required>
						<br>	
						<input type="checkbox" name="permanenttoo" onclick="Fillpermanent(this.form)"> Click if the permanent address is the same as present address.
						<br>
						Permanent Address: <input style="max-width: 100%;text-align: center;" type="text" name="permanent_address" maxlength="50" placeholder="Permanent Address:"required>
						House No./ Street Village: <input style="max-width: 100%;text-align: center;" type="text" name="permanent_houseno" maxlength="30" placeholder="House No./ Street Village:"required>	
						Barangay:  <input style="max-width: 100%;text-align: center;" type="text" name="permanent_barangay" maxlength="15" placeholder="Barangay" required>
						Municipality/City: <input style="max-width: 100%;text-align: center;" type="text" name="permanent_municipality" maxlength="15" placeholder="Municipality/City"required>	
						Province: <input style="max-width: 100%;text-align: center;" type="text" name="permanent_province" maxlength="15" placeholder="Province"required>
						Citizenship: <input  style="max-width: 100%;text-align: center;" type="text" name="p_citizenship" maxlength="10" placeholder="Citizenship" required>
						Height: <input  style="max-width: 100%;text-align: center;" type="text" name="p_height" maxlength="5" placeholder="Height(cm)" required>
						Weight: <input  style="max-width: 100%;text-align: center;" type="text" name="p_weight" maxlength="5" placeholder="Weight(kg)" required>
						Landline Number: <input  style="max-width: 100%;text-align: center;" type="text" name="p_landline" maxlength="15" placeholder="Landline Number" required>
						<br>Mobile Number<br>Primary Number: <input  style="max-width: 100%;text-align: center;" type="text" name="p_primarynum" maxlength="11" placeholder="Primary Number" required>
						Secondary Number: <input  style="max-width: 100%;text-align: center;" type="text" name="p_secondarynum" maxlength="11" placeholder="Secondary Number" required>
						Email Address: <input  style="max-width: 100%;text-align: center;" type="email" name="p_emailadd" maxlength="20" placeholder="Email Address" required>
						Disability<br>
						<input type="checkbox" name="disability" value="visual" required="required"> Visual
						<input type="checkbox" name="disability" value="hearing" required="required"> Hearing<br>
						<input type="checkbox" name="disability" value="speech" required="required"> Speech
						<input type="checkbox" name="disability" value="physical" required="required"> Physical
						<input type="checkbox" name="disability" value="none" required="required"> None

						<br><br> Employment Status<br>
						<input type="radio" id="priority-employed" name="e_status" value="Employed" required >
							<label for="priority-employed">Employed</label>
						<input type="radio" id="priority-wage_employed" name="e_status" value="Wage Employed" required >
							<label for="priority-wage_employed">Wage Employed</label><br>
						<input type="radio" id="priority-unemployed" name="e_status" value="Unemployed" required >
							<label for="priority-unemployed">Unemployed</label>
						<input type="radio" id="priority-self_employed" name="e_status" value="Self Employed" required >
							<label for="priority-self_employed">Self Employed</label><br>
						<input type="radio" id="priority-fresh_grad" name="e_status" value="New Entrant/Fresh Graduate" required >
							<label for="priority-fresh_grad">New Entrant/Fresh Graduate</label>
						<input type="radio" id="priority-finished_contract" name="e_status" value="Finished Contract" required="required"> 
							<label for="priority-finished_contract">Finished Contract</label><br>
						<input type="radio" id="priority-resigned" name="e_status" value="Resigned" required="required"> 
							<label for="priority-resigned">Resigned</label>
						<input type="radio" id="priority-retired" name="e_status" value="Retired" required="required"> 
							<label for="priority-retired">Retired</label><br>
						
						<input type="radio" id="priority-terminated_local" name="e_status" value="Terminated/Laidoff(local)" required="required"> 
							<label for="priority-terminated_local">Terminated/Laidoff(local)</label>
						<input type="radio" id="priority-terminated_abroad" name="e_status" value="Terminated/Laidoff(abroad)" required="required"> 
							<label for="priority-terminated_abroad">Terminated/Laidoff(abroad)</label>
						
						<p style="margin: auto;">Are you actively looking for work? 
						<input type="checkbox" id="looking_action_yes" name="looking_ans_yes" value="yes" required="required" onclick="myFunction1()"> Yes
						<input type="checkbox" name="looking_ans_no" value="no" required="required"> No </p>
						
						<p id="howlong" style="display: none;"><span style="color: skyblue">How long have you been looking for work?</span><input type="text" style="max-width: 10.5%;" maxlength="10" name="looking_for_job" required></p>

						<p style="margin: auto;">Willing to work immediately? 
						<input type="checkbox"  name="immediate_ans_yes" value="yes" required="required" > Yes
						<input type="checkbox" id="immediate_action_no" name="immediate_ans_no" value="no" required="required" onclick="myFunction2()"> No </p>
						
						<p id="when" style="display: none;"><span style="color: skyblue">When?</span><input type="text" style="max-width: 10.5%;" maxlength="10" name="ifno" required></p>

						<p style="margin: auto;">Are you a 4Ps benificiary? 
						<input type="checkbox" id="benificiary_action_yes" name="benificiary_ans_yes" value="yes" required="required" onclick="myFunction3()"> Yes
						<input type="checkbox"  name="benificiary_ans_no" value="no" required="required" > No </p>
						
						<p id="HouseId" style="display: none;"><span style="color: skyblue">Household Id No.</span><input type="text" style="max-width: 10.5%;" maxlength="10" name="householdidno" required></p><br>

					<a href="enroll2.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-right"></a>
			</fieldset>							
		</form>
			
			<!-- 	<div class="progress">
				  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
				  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
				    40% Complete (success)
				  </div>
				</div>
 -->







		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; All Rights Reserved <a href="index.html">Cebu City 2018</a>
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
		<script type="text/javascript">
			function Fillpermanent(f) 
			{
  				if(f.permanenttoo.checked == true) 
  				{
    				f.permanent_address.value = f.present_address.value;
    				f.permanent_houseno.value = f.present_houseno.value;
    				f.permanent_barangay.value = f.present_barangay.value;
    				f.permanent_municipality.value = f.present_municipality.value;
    				f.permanent_province.value = f.present_province.value;
    				
  				}
  				if(f.permanenttoo.checked == false) 
  				{
    				f.permanent_address.value="";
    				f.permanent_houseno.value = "";
    				f.permanent_barangay.value = "";
    				f.permanent_municipality.value = "";
    				f.permanent_province.value = "";    				
  				}
				  				
			}
		</script>
		<script type="text/javascript">
							function myFunction1()
							{
								//get the checkbox
								var checkbox= document.getElementById("looking_action_yes");
								//get the text
								var text =document.getElementById("howlong")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>
		<script type="text/javascript">
							function myFunction2()
							{
								//get the checkbox
								var checkbox= document.getElementById("immediate_action_no");
								//get the text
								var text =document.getElementById("when")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>				
		<script type="text/javascript">
							function myFunction3()
							{
								//get the checkbox
								var checkbox= document.getElementById("benificiary_action_yes");
								//get the text
								var text =document.getElementById("HouseId")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>				
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>