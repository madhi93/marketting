@extends('layouts.app2')
@section('content')


<div class="app-main__outer">	
	<div class="app-main__inner">	    
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="col-md-12 grid-margin stretch-card">
		            <div class="card"  id="new-reg-form">
		                <div class="card-body">
		                  	<h1 class="text-center card-description">Jeremy Good Helpers</h1>
		                  	<h6 class="text-center card-description">Marketing</h6>
		                  	<h2 class="h2 text-center">Application Form</h2>
		                  	<form class="forms-sample" id="due_recipt" method="post" action="{{route('ddstore')}}">
		                  		{{csrf_field()}}
		                  		<div class="card-body">
		                  			<div class="row">
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="hp_no"> Reference Name </label>
						                      <input type="text" class="form-control" id="ref_name" placeholder="" name="ref_name" required>

						                    </div>
				                  		</div>
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="ref_id">Reference Id</label>
												<input type="text" class="form-control" id="ref_id" placeholder="" name="ref_id" required>
{{--						                      <input type="date" class="form-control" id="date" placeholder="date" name="date">--}}
						                    </div>
				                  		</div>
				                  	</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Reference Cell No </label>
												<input type="text" class="form-control" id="ref_cell_no" placeholder="" name="ref_cell_no" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ref_id">Aadhar Number</label>
												<input type="text" class="form-control" id="adr_no" placeholder="" name="adr_no" required>
												{{--						                      <input type="date" class="form-control" id="date" placeholder="date" name="date">--}}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no"> Registeration Number </label>
												<input type="text" class="form-control" id="reg_no" placeholder="" name="reg_no" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ref_id">Distributor Name</label>
												<input type="text" class="form-control" id="ds_name" placeholder="" name="ds_name" required>
											</div>
										</div>
									</div>
				                  	<div class="row">
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="hp_no">Date of Birth</label>
												<input type="date" class="form-control" id="dob"  name="dob">
						                    </div>
				                  		</div>
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="date">Mobile Number</label>
						                      <input type="text" class="form-control" id="cell_no" placeholder="Mobile number" name="cell_no">
						                    </div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-12">
						                    <div class="form-group">
						                      <label for="hp_no">Address :</label>
						                    </div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-12">
				                  			<div class="form-group">
												<textarea class="form-control" placeholder="Address" name="address"></textarea>
				                  			</div>
				                  		</div>
				                  	</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">State</label>
												<select id="state" class="form-control vehicle_type state" name="state">
													<option value="">Select the option  </option>
													<option value="tn">Tamilnadu</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">District</label>
												<select id="distict" class="form-control vehicle_type distict" name="distict">
													<option value="">Select the option  </option>
													@php
													$disticts = array('Ariyalur', 'Chengalpattu', 'Chennai', 'Coimbatore', 'Cuddalore', 'Dharmapuri', 'Dindigul', 'Erode', 'Kallakurichi', 'Kanchipuram', 'Kanyakumari', 'Karur', 'Krishnagiri', 'Madurai', 'Nagapattinam', 'Namakkal', 'Nilgiris', 'Perambalur', 'Pudukkottai', 'Ramanathapuram', 'Ranipet', 'Salem', 'Sivaganga', 'Tenkasi', 'Thanjavur', 'Theni', 'Thoothukudi (Tuticorin)', 'Tiruchirappalli', 'Tirunelveli', 'Tirupathur', 'Tiruppur', 'Tiruvallur', 'Tiruvannamalai', 'Tiruvarur', 'Vellore', 'Viluppuram', 'Virudhunagar');
													@endphp
													@foreach($disticts as	$distict)
														<option value="{{strtolower($distict)}}">{{ucfirst($distict)}}</option>
														@endforeach
												</select>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Email</label>
												<input type="email" class="form-control" id="email"  name="email" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="date">Pincode</label>
												<input type="text" class="form-control" id="pincode" placeholder="Pincode" name="pincode">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="hp_no">Bank Details :</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Account Number</label>
												<input type="text" class="form-control" id="ac_no"  name="ac_no" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="date">IFSC Code</label>
												<input type="text" class="form-control" id="ifsc_code" placeholder="IFSC Code" name="ifsc_code">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Pan Number</label>
												<input type="text" class="form-control" id="pan_no"  name="pan_no" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Branch</label>
												<input type="text" class="form-control" id="branch"  name="branch" required>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="hp_no">Nominee Details :</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Name</label>
												<input type="text" class="form-control" id="n_name"  name="n_name" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">RelationShip</label>
												<input type="text" class="form-control" id="n_relationship"  name="n_relationship" required>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Mobile Number</label>
												<input type="text" class="form-control" id="n_mobile"  name="n_mobile" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="hp_no">Aadhar Number</label>
												<input type="text" class="form-control" id="n_aadhar"  name="n_aadhar" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="hp_no">Address :</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" placeholder="Address" name="n_address"></textarea>
											</div>
										</div>
									</div>

				                  	<div class="row">
				                  		<div class="col-md-12">
				                  			<div class="form-group">
			                  					<button class="btn btn-primary col-md-2 offset-md-5" type="submit">Submit</button>
			                  				</div>
				                  		</div>
				                  	</div>
		                  		</div>
		                  	</form>
			               
                    	</div>
		            </div>
	            </div>
			</div>
		</div>
	</div>
</div>


@endsection
