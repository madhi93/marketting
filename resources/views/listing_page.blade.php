@extends('layouts.app2')
@section('content')


<div class="app-main__outer">	
	<div class="app-main__inner">	    
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="col-md-12 grid-margin stretch-card">
		            <div class="card"  id="new-reg-form">
		                <div class="card-body">
		                  	<h1 class="text-center card-description">Sri Vigneshwara Auto Finance</h1>
		                  	<h6 class="text-center card-description">K.N.R. Complex, Sethumadai Road, Anamalai</h6>
		                  	<h2 class="h2 text-center">New Loan Form</h2>
							{{Session::get('msg')}}
			                <form class="forms-sample" method="post" action="{{route('newreg')}}">
			                	{{csrf_field()}}
			                	<div class="card-header">

				                  	<ul class="nav nav-justified">
			                            <li class="nav-item">
			                                <a role="tab" class="nav-link active tab-switch show disabled" id="tab-0" data-toggle="tab" href="#tab-content-0">
			                                    <span>Customer Details</span>
			                                </a>
			                            </li>
			                            <li class="nav-item">
			                                <a role="tab" class="nav-link tab-switch disabled" id="tab-1" data-toggle="tab" href="#tab-content-1">
			                                    <span>Finance details</span>
			                                </a>
			                            </li>
			                            <li class="nav-item">
			                                <a role="tab" class="nav-link tab-switch disabled" id="tab-2" data-toggle="tab" href="#tab-content-2">
			                                    <span>Initial Payment details</span>
			                                </a>
			                            </li>
			                            <li class="nav-item">
			                                <a role="tab" class="nav-link tab-switch disabled" id="tab-3" data-toggle="tab" href="#tab-content-3">
			                                    <span>Others</span>
			                                </a>
			                            </li>
			                        </ul>
			                	</div>
			                	<div class="card-body">
		                        <div class="tab-content">
		                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
		                        		<h5 class="card-title">Customer & Vehicle Details</h5>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="hp_no">HP NO</label>
							                      <input type="number" class="form-control listing_page_1" id="hp_no" placeholder="HP Number" name="hp_number">

							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="date">Date</label>
							                      <input type="date" class="form-control listing_page_1" id="date" placeholder="date" name="date">
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="hire_name">Hire's Name</label>
							                      <input type="text" class="form-control listing_page_1" id="hire_name" placeholder="Hire's Name" name="hire_name">
							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="hire_address">Hire's Address</label>
							                      <textarea type="text" class="form-control listing_page_1" id="hire_address" placeholder="Hire's Address" name="hire_address"></textarea>
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="guarantor_name">Guarantor's Name</label>
							                      <input type="text" class="form-control listing_page_1" id="guarantor_name" placeholder="Hire's Name" name="guarantor_name">
							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="guarantor_address">Guarantor's Address</label>
							                      <textarea type="text" class="form-control listing_page_1" id="guarantor_address" placeholder="Hire's Address" name="guarantor_address"></textarea>
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
					                  			<div class="form-group">
							                      	<label for="vehicle_category">Vehicle Category</label>
							                      	
							                      	<select id="vehicle_category" class="form-control vehicle_type listing_page_1" name="vehicle_category">
														<option value="">Select the option  </option>
														@foreach($categories as $category)
															<option value="{{$category->id}}">{{$category->category}}</option>
														@endforeach
                                                    </select>
							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
					                  			<div class="form-group">
							                      	<label for="vehicle_brand">Select Brand</label>
							                      	<select id="vehicle_brand" class="form-control vehicle_type listing_page_1" name="vehicle_vehicle">

                                                    </select>
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
					                  			<div class="form-group">
							                      	<label for="vehicle_model">Vehicle Model</label>
							                      	<select id="vehicle_model" class="form-control vehicle_type listing_page_1"  name="vehicle_model">

                                                    </select>
							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
					                  			<div class="form-group">
							                      	<label for="vehicle_year">Year</label>
													<input type="text" class="form-control year listing_page_1 " name="vehicle_year"  id="vehicle_year">
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="vehicle_number">Vehicle Number</label>
							                      <input type="text" class="form-control listing_page_1" id="vehicle_number" placeholder="Vehicle Number" name="vehicle_number">
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="chassis_no">Chassis Number</label>
							                      <input type="text" class="form-control listing_page_1" id="chassis_no" placeholder="Chassis Number" name="chassis_no">
							                    </div>
					                  		</div>
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="engine_number">Engine Number</label>
							                      <input type="text" class="form-control listing_page_1" id="engine_number" placeholder="Engine Number" name="engine_number">
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-2 offset-md-5">

				                            	<ul class="nav nav-justified foot-link" id="tabs">
						                            
						                            <li class="nav-item">
						                                <a role="tab" class="nav-link next-tab mb-2 mr-2 btn btn-primary listing_page" data-id="listing_page_1" id="tab-4" data-toggle="tab" href="#tab-content-1">
						                                    <span>Next</span>
						                                </a>
						                            </li>
						                            
						                        </ul>
					                  		</div>

					                  	</div>
						            </div>
	                            	<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
	                            		<h5 class="card-title">Finance Details</h5>
	                            		<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="contract_period">Period of contract</label>
							                      <input type="text" class="form-control listing_page_2" id="contract_period" placeholder="No of months" name="contract_period">
							                    </div>

					                  		</div>
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="vehicle_cost">Cost of vehicle(in RS)</label>
											      	<input type="text" class="form-control listing_page_2" id="vehicle_cost" placeholder="Cost of vehicle" name="vehicle_cost">
											    </div>
											</div>
					                  	</div>
	                            		<div class="row">
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="advance_amount">Amount in advance(in RS)</label>
											      	<input type="number" class="form-control listing_page_2" id="advance_amount" placeholder="Amount in advance" name="advance_amount">
											    </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="financial_charge">Financial changes (in Rs)</label>
											      	<input type="text" class="form-control listing_page_2" id="financial_charge" placeholder="Financial changes" name="financial_charge">
											    </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="interest">Interest (in %)</label>
											      	<input type="text" class="form-control listing_page_2" id="interest" placeholder="Interest" name="interest">
											    </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
										      		<label for="total_finance">Total (in Rs.)</label>
										      		<input type="number" class="form-control listing_page_2" id="total_finance" placeholder="Total" name="total_finance">
										    	</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<h5 class="card-title">Due Details</h5>
												<div class="row due-details">
													<p class="col-md-12">Rs <strong><span class="permonthdue">0</span></strong> for <strong><span class="noofMonths">0</span></strong> Months</p> 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 offset-md-3">

												<ul class="nav nav-justified foot-link" id="tabs">
					                            	<li class="nav-item">
						                                <a role="tab" class="nav-link previous-tab mb-2 mr-2 btn btn-primary" id="tab-5" data-toggle="tab" href="#tab-content-0">
						                                    <span>prev</span>
						                                </a>
						                            </li>
						                            <li class="nav-item">
						                                <a role="tab" class="nav-link next-tab mb-2 mr-2 btn btn-primary listing_page" data-id="listing_page_2" id="tab-6" data-toggle="tab" href="#tab-content-2">
						                                    <span>Next</span>
						                                </a>
						                            </li>
					                            
					                        	</ul>
											</div>
										</div>
	                            	</div>
	                            	<div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
	                            		<h5 class="card-title">Initial payment details</h5>
	                            		<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="cost_difference">Difference in cost</label>
							                      <input type="text" class="form-control listing_page_3" id="cost_difference" placeholder="Difference in cost" name="cost_difference">
							                    </div>

					                  		</div>
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="caution_deposit">Caution deposit</label>
											      	<input type="text" class="form-control listing_page_3" id="caution_deposit" placeholder="Caution deposit" name="caution_deposit">
											    </div>
											</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="current_insurance">Current year Insurance</label>
							                      <input type="text" class="form-control listing_page_3" id="current_insurance" placeholder="Current year Insurance" name="current_insurance">
							                    </div>

					                  		</div>
											<div class="col-md-6">
												<div class="form-group">
											      	<label for="rto_expense">RTO Expenses</label>
											      	<input type="text" class="form-control listing_page_3" id="rto_expense" placeholder="RTO Expenses" name="rto_expense">
											    </div>
											</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6">
							                    <div class="form-group">
							                      <label for="total_other">Total</label>
							                      <input type="text" class="form-control listing_page_3" id="total_other" placeholder="Total amount" name="total_other">
							                    </div>

					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-6 offset-md-3">

							                  	<ul class="nav nav-justified foot-link" id="tabs">
					                            	<li class="nav-item">
						                                <a role="tab" class="nav-link previous-tab mb-2 mr-2 btn btn-primary" id="tab-7" data-toggle="tab" href="#tab-content-1">
						                                    <span>prev</span>
						                                </a>
						                            </li>
						                            <li class="nav-item">
						                                <a role="tab" class="nav-link next-tab mb-2 mr-2 btn btn-primary listing_page" data-id="listing_page_3" id="tab-8" data-toggle="tab" href="#tab-content-3">
						                                    <span>Next</span>
						                                </a>
						                            </li>
					                            
					                        	</ul>
					                  		</div>
					                  	</div>
	                            	</div>
	                            	<div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
	                            		<h5 class="card-title">Other details</h5>
	                            		<div class="row">
					                  		<div class="col-md-12">
							                    <div class="form-group row">
							                      	<label for="reg_date" class="col-md-3">R. No & date</label>
							                      	<div class="col-md-9">
							                      		<input type="text" class="form-control listing_page_4" id="reg_date" placeholder="R. No & date" name="reg_date">
							                      	</div>
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-12">
							                    <div class="form-group row">
							                      	<label for="dealer_name" class="col-md-3">Dealer Name</label>
							                      	<div class="col-md-9">
							                      		<input type="text" class="form-control listing_page_4" id="dealer_name" placeholder="Dealer Name" name="dealer_name">
							                      	</div>
							                    </div>
					                  		</div>
					                  	</div>
					                  	<div class="row">
					                  		<div class="col-md-12">
							                    <div class="form-group row">
							                      	<label for="cheque_no" class="col-md-3 listing_page_4">Cheque No.</label>
							                      	<div class="col-md-9">
							                      		<input type="text" class="form-control" id="cheque_no" placeholder="Cheque No." name="cheque_no">
							                      	</div>
							                    </div>
					                  		</div>
					                  	</div>
				                  		<div class="row">
				                  			<div class="col-md-6 offset-md-3">
					                  				<ul class="nav nav-justified foot-link" id="tabs">
						                            	<li class="nav-item">
							                                <a role="tab" class="nav-link tab-switch previous-tab mb-2 mr-2 btn btn-primary" id="tab-9" data-toggle="tab" href="#tab-content-2">
							                                    <span>prev</span>
							                                </a>
							                            </li>
							                            <li class="nav-item">
							                                <button class="mb-2 mr-2 btn btn-primary">Submit</button>
							                            </li>
						                            
						                        	</ul>
				                  			</div>
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
