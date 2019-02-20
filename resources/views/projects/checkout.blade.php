@extends('layouts.master')
 
@section('title', 'Cart')
 
@section('content')
<?php
	$total=0;
	?>
			 
		   @foreach($showData as $u)
		
		  <input type="hidden" name="" value="{{ $total+= $u->price*  $u ->quantity}}">
		@endforeach

<div class="row"> 
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		<center><h2>Stripe Payment</h2></center>
		
		<div id="charge-error" class="alert alert-danger alert-dismissible {{!Session::has('error')?'hidden' : ''}}">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
		{{Session::get('error')}} </div>

		<form action="{{route('checkout')}}" method="post" id="checkout-form">
			{{csrf_field()}}
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control" pattern="[A-Za-z ]+" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" name="address" class="form-control" pattern="[A-Za-z0-9 ]+"  minlength="20" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="card-name">Card Holder Name</label>
						<input type="text" id="card-name" class="form-control" pattern="[A-Za-z ]+" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="card-number">Credit Card Number</label>
						<input type="text" pattern="[0-9]{13,16}" id="card-number" class="form-control" maxlength="16" required>
					</div>
				</div>
			</div>
			<div lass="col-xs-12">
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label for="card-expiry-month">Expiry Month</label>
						<input type="text" id="card-expiry-month" pattern="[0-9]{2}" class="form-control" maxlength ="2" required>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label for="card-expiry-year">Expiry year</label>
						<input type="text" id="card-expiry-year" pattern="[0-9]{4}" class="form-control" maxlength="4" required>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="form-group">
						<label for="card-cvc">CVC</label>
						<input type="text" id="card-cvc" maxlength="3" class="form-control" pattern="[0-9]{3}" required>
					</div>
				</div>
			</div>

			</div>
			<div class='form-row'>
        	<div class='col-md-12 form-group'>
            <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;">Pay » <i class="fas fa-rupee-sign"></i>{{$total}}</button>
        	</div>
    		</div>
			
				
		</form>
	</div>
</div>


    
@endsection

@section('scripts')
<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{URL::to('js/checkout.js')}}"></script>

@endsection
