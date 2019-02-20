@extends('layouts.master')

@section('title')
{{$product->productname}}
@endsection
@section('content')

 <!-- <a href="/projects/{{$product->id}}/edit">Edit</a> -->



	<div align="center" class="col-sm-5 border" style ="height: 520px; min-width: 280px;  width: 20%;  position: relative;">
<img src="{{$product->imageurl}}" style="height:  80%; min-height: 460px; max-width: 550px;"  ><p class="mt-1">
	

		<form method="POST" action="{{route('product.addToCart')}}">
		{{csrf_field()}}
		@if (!Auth::guest())
		<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
		@endif
		<input type="hidden" name="product_id" value="{{$product->id}}">

		<button type="submit" class="btn btn-warning">Add to cart</button>

</form>	


</p>
</div>
<div style="float: right; position: relative;" class="col-sm-7">

	<h3 class="title">{{$product->productname}}</h3>
	<h4>{{$product->modelno}}</h4>
	<div style="display: inline;">
<h3><i class="fas fa-rupee-sign"></i> {{$product->price}}
	@if($product->mrp>0)
	<h5><strike><i class="fas fa-rupee-sign"></i>{{$product->mrp}}</strike></h5>
	@endif
</h3>
</div>


 <table>
<tr class ="border"><td><h2>Highlights </h2></td><td></td></tr>

<tr><td><h5>{{$product->description_1}}</h5></td></tr>
<tr><td><h5>{{$product->description_2}}</h5></td></tr>
<tr><td><h5>{{$product->description_3}}</h5></td></tr>
<tr><td><h5>{{$product->description_4}}</h5></td></tr>
<tr><td><h5>{{$product->description_5}}</h5></td></tr>
<tr><h5>{{$product->description_long}} </h5></td></tr>

</table>
</div>
 @endsection
