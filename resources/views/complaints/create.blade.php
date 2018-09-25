@extends('layout')

@section('content')

	<div class="col-sm-8 blog-main">


		<form class ="horizontal" method ="POST" action ="/complaints" style="background-color:#000; color:white; padding:10px; margin-bottom: 10px;">

	  			<h5 style="color:white; text-align: center;">Whistle Blower/Reporter's Contact Information</h5>

	  			<div class="form-group">

	  				<label for ="reporter_name">Name:</label>

	  				<input type ="text" class="form-control" name ="reporter_name" placeholder="Enter your name">

	  			</div>

	  			<div class="form-group">

	  				<label for ="contact number">Contact Number:</label>

	  				<input type ="text" class="form-control" name ="reporter_contact" placeholder="Enter your contact number">

	  			</div>

	  			<div class="form-group">

	  				<label for ="email">Email Address</label>

	  				<input type ="email" class="form-control" name ="reporter_email" placeholder="Enter your email address">

	  			</div>

	  			<div class="form-group">

	  				<label for ="address">Address</label>

	  				<input type ="text" class="form-control" name ="reporter_location" placeholder="Enter your location address">

	  			</div>

	  			<h5>Accused/Suspect's Information</h5>

	  			<div class="form-group">

	  				<label for ="suspect_name">Name:</label>

	  				<input type ="text" class="form-control" name ="suspect_name" placeholder="Enter suspect's name">

	  			</div>

	  			<div class="form-group">

	  				<label for ="designation">Designation</label>

	  				<input type ="text" class="form-control" name ="suspect_designation" placeholder="Enter the suspect's designation">

	  			</div>

	  			<div class="form-group">

	  				<label for ="organization">Oranization</label>

	  				<input type ="text" class="form-control" name ="suspect_organization" placeholder="Enter the suspect's organization">

	  			</div>
	  		
	  			<div class="form-group">

	  				<label for ="details">Any Other information related to the identification of the suspect/accused(location, project/program name)

	          		</label>

	  				<textarea type ="text" class="form-control" name ="details" placeholder="Enter more details about the suspect "></textarea>

	  			</div>

	  			<h5>Complaint Type</h5>

		  			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Theft and embezzlement

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Corruption and bribery 

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Procurement Related Fraud

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Misuse of Resources/Authority

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Failure to comply with requirement related to financial disclosure and/or local laws

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Misinterpretation of facts

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Breach of funding agreement with CARE

		 			</label><br>

		 			<label class="btn btn-secondary">

		    		<input type="radio" name="complaint_type" id="option2" autocomplete="off">Any other

		 			</label><br>

	 			<div class="form-group">

	  				<label for ="details">Brief details of the complaint</label>

	  				<textarea type ="text" rows="5" class="form-control" name ="suspect_details" placeholder="Enter more details about the suspect "></textarea>

	  			</div>

	  			<div class="form-group">
	  				
				  	Attach files:

				    <input type="file" name="attachments" id="files">				   

	  			</div>

	  			<button type="submit" class="btn btn-warning">Submit</button>
	  		

		  	@include('layouts.errors')

	   </form>
	    
	</div>
@endsection