@extends('layouts.master')

@section('title','getbargaineer')
@section('content')
<div class="row">
    @foreach($products as $pro )
        <div class="col-sm-4 "style="width: 250px;" >
            <div class="thumbnail"><center>
                <a data-widget-type="omu" href="/projects/{{ $pro->id}}">
                <img src="{{$pro->imageurl}}" style="width:30%" style="margin-top: 10px"alt="..." class="img-responsive">
                <div class="caption">
                    
                    <p class="description "><h5 class=" text-dark">{{$pro->productname}}
            <div class="text-success">{{$pro->primarycamera}}|{{$pro->secondarycamera}} </div><br>
            <div class="text-muted">Price : <i class="fas fa-rupee-sign"></i>
                {{$pro->price}} 
                 @if($pro->mrp>0)
                <strike class="text-danger"><i class="fas fa-rupee-sign"></i> {{$pro->mrp}}
                </strike>@endif</div></h5></p>
                    <div class="clearfix">
                        
                        
                    </div>
                </div>
            </a></center>
            
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('styles')
<style type="text/css">
    .img-responsive:hover{
        transform: scale(1.07);
    }
</style>
@endsection
