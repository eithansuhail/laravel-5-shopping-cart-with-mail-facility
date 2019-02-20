@extends('layouts.master')

@section('title','User profile')
@section('content')
    @if(count($orders)>0)

     @foreach($orders as $order)
     
     <center> <h4>Your Orders</h4></center>
     <div class="panel panel-default">
  <div class="panel-heading">Payment ID : {{$order->payment_id}}        <div style="float: right;">Order ID :  {{$order->id}} </div></div>
  <div class="panel-body">
     <h4>Delivery Address : {{$order->address}}</h4>
<table>
    <?php
    $total=0;
    ?>
    @foreach($order_products as $pro )  
    @if($pro->orderid == $order->id) 
    <tr class=" w3-col w3-container m6  l6">
        <td width=" 20%">
            <img src="{{$pro->imageurl}}" style="height:20%" style="margin-top: 10px" class="img-responsive">
        </td>   
        <td>
               <a data-widget-type="omu" href="/projects/{{ $pro->pid}}">Quanity : {{$pro->quantity}}
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
        </tr><?php 
        $total+= $pro->price*  $pro ->quantity;
        ?>
    
        @endif
        @endforeach
        </table>
        <hr><h3>Total  : <i class="fas fa-rupee-sign"></i>{{$total}}</h3>
    </div>
     


     @endforeach
     @else
     You have not shopped yet.
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

