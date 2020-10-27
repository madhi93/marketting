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
		                  	<h2 class="h2 text-center">Due receipt</h2>
		                  	<form class="forms-sample" id="due_recipt" method="post" action="{{route('ddstore')}}">
		                  		{{csrf_field()}}
		                  		<div class="card-body">
		                  			<div class="row">
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="hp_no">HP NO</label>
						                      <input type="number" class="form-control" id="hp_no" placeholder="HP Number" name="hp-number" required>

						                    </div>
				                  		</div>
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="date">Date</label>
						                      <input type="date" class="form-control" id="date" placeholder="date" name="date">
						                    </div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="hp_no">Name</label>
						                      <input type="number" class="form-control" id="hp_no" placeholder="HP Number" name="hp-number" required>

						                    </div>
				                  		</div>
				                  		<div class="col-md-6">
						                    <div class="form-group">
						                      <label for="date">Amount Paid</label>
						                      <input type="number" class="form-control" id="amount_paid" placeholder="Amount Paid" name="date">
						                    </div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-12">
						                    <div class="form-group">
						                      <label for="hp_no">Amount paid(in words):</label>
						                      
						                      <span id="words"></span>
						                    </div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-12">
				                  			<div class="form-group">
				                  				<label for="date">Amount received by</label>
						                      	<input type="text" class="form-control" id="amount_paid" placeholder="Amount Paid" name="date">
				                  			</div>
				                  		</div>
				                  	</div>
				                  	<div class="row">
				                  		<div class="col-md-12">
				                  			<div class="form-group">
				                  				<label for="date">Remarks</label>
						                      	<textarea class="form-control" placeholder="Remarks" name="due-remarks"></textarea>
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
