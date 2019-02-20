@extends('layouts.master')

@section('title','Add')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Search Results</div>
  <div class="panel-body">
     @if(count($products)>0)
<table>
    @foreach($products as $pro )   
    <tr class=" w3-col w3-container m6  l6">
        <td width=" 20%">
            <img src="{{$pro->imageurl}}" style="height:20%" style="margin-top: 10px" class="img-responsive">
        </td>   
        <td>
               <a data-widget-type="omu" href="/projects/{{ $pro->id}}">
            <p class="description "><h4 class=" text-dark">{{$pro->productname}}</h4></p>
            <div class="text-success">{{$pro->description_1}} | {{$pro->description_2}} </div>
            </a>  
        </td> 
        <td>            
            <div class="text-muted">Price : <i class="fas fa-rupee-sign"></i>
                {{$pro->price}} <br>
                 @if($pro->mrp>0)
                <strike class="text-danger"><i class="fas fa-rupee-sign"></i> {{$pro->mrp}}
                </strike>@endif</div>
        </td>     
        </tr>

        @endforeach
        </table>
    </div>
     @else 
    <h3>No data found</h3>
    @endif
    </div>
</div>
@endsection

@section('styles')
<style type="text/css">
    .img-responsive:hover{
        transform: scale(1.07);
    }
</style>
@endsection

@section('scripts')
$('.carousel').carousel()
@endsection