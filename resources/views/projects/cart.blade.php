@extends('layouts.master')
 
@section('title', 'Cart')
 
@section('content')

<table>
	<tr>
		<th width="13%">Image</th>
		<th width="40%">Product Name</th>
		<th width="10%">Quantity</th>
		<th width="20%">Price</th>
		<th width="17%"> Remove Item</th>

	</tr>
	<?php
	$total=0;
	?>
			 
		   @foreach($showData as $u)
		<tr class="m">
		<td width="13%" class="mt-1">
			<a href="/projects/{{$u->pid}}"><img src="{{$u->imageurl}}" class="img-responsive" style="height:20%; min-width: 50px;" class="image-responsive"></a></td>
		<td width="40%"> <h4> {{$u->pname}} </h4> </td>

		
		<td width="10%"> 
			<form method="POST" action="/carts/{{$u->cart_id}}">
				{{method_field('PATCH')}}
				{{csrf_field()}}
				<input type="number" name="quantity" style="width:30% ; min-width: 30px;" value="{{$u ->quantity}}">
				<button type="submit"><i class="fas fa-sync-alt"></i></button>
			</form>
	</td>



		<td width="20%">{{$u->price}}</td>
		
		<td width="17%">

<form method="POST" action="/carts/{{$u->cart_id}}">
	{{method_field('DELETE')}}
	{{csrf_field()}}
			<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
		</form>

		</td>
		</tr>
		  <input type="hidden" name="" value="{{ $total+= $u->price*  $u ->quantity}}">
		@endforeach
		<tr><th></th>
			<th></th>
			
			<th>Total Price</th>
		<th width="50%"> {{$total}}</th>
		<td> <a href="{{route('checkout')}}" type="button"  class="btn btn-success"> Checkout </a> </td>
		</tr>
</table>

    
@endsection

@section('styles')
<style type="text/css">
    .img-responsive:hover{
        transform: scale(1.07);
    }
</style>
@endsection