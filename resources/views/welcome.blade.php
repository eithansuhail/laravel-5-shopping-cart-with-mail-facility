@extends('layouts.master')

@section('title','getbargaineer')
@section('content')



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
       <a href="/projects/1">
      <img src="https://s.aolcdn.com/hss/storage/midas/437b0d933995f24d44f7bb089c7318db/204404124/nexus2cee_pixelad-1.jpg" style="width: 100%;max-height: 280px;"></a>
      
    </div>
     <div class="item">
      <a href="/projects/2"><img src="https://s3-ap-southeast-1.amazonaws.com/files.bestdenki.com.sg/product/public/%28Best%20Denki%29%20Web%20Homepage%20Banner%20-%201720x640pixels_5.jpg"  style="width: 100%; max-height: 280px;" ></a>
     
      
    </div>

    <div class="item"><a href="/projects/3"><img src="https://www.gizmochina.com/wp-content/uploads/2018/09/Realme-2-Pro-colors-e1538037401636.png" alt="Chania" style="width: 100%; max-height: 280px;" ></a>
     
      
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>  
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@if(Session::has('success'))
<div class="row">
   <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
       <div id="charge-message" class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
           {{Session::get('success')}}
       </div>
   </div> 

</div>
@endif
<br>
<div class="panel panel-default">
  
  <div class="panel-heading"><a href="/category/mobiles" type="button" class="btn btn-primary btn-lg"> All Mobiles</a></div>
    
  <div class="panel-body">
<div class="w3-row ">
    @foreach($products as $pro )
        <div class="w3-col w3-container s6 m4 l2 w3-white" >
            <center>
                <a data-widget-type="omu" href="/projects/{{ $pro->id}}">
                <img src="{{$pro->imageurl}}" style="height: 120px;" style="margin-top: 10px; max-width: 300px;"class="img-responsive">
               
                    
                    <p class="description "><h6 class=" text-dark">{{$pro->productname}}
            <div class="text-success">{{$pro->description_1}}</div><br>
            <div class="text-muted">Price : <i class="fas fa-rupee-sign"></i>
                {{$pro->price}} 
                 @if($pro->mrp>0)
                <strike class="text-danger"><i class="fas fa-rupee-sign"></i> {{$pro->mrp}}
                </strike>@endif</div></h6></p>
                    
              
            </a></center>
            
            
        </div>
        @endforeach
    </div>
    </div>
</div>

<br>
<div class="panel panel-default">
 
  <div class="panel-heading">
    <div class="panel-heading"><a href="/category/tvs" type="button" class="btn btn-primary btn-lg"> All TVs</a></div></div>
  <div class="panel-body">
<div class="w3-row">
    @foreach($tvs as $tv )
         <div class="w3-col w3-container s6 m4 l2 w3-white" >
            <center>
                <a data-widget-type="omu" href="/projects/{{ $tv->id}}">
                <img src="{{$tv->imageurl}}" style="height: 120px;" style="margin-top: 10px; max-width: 300px;"class="img-responsive">
               
                    
                    <p class="description "><h6 class=" text-dark">{{$tv->productname}}
            <div class="text-success">{{$pro->description_1}}</div><br>
            <div class="text-muted">Price : <i class="fas fa-rupee-sign"></i>
                {{$tv->price}} 
                 @if($tv->mrp>0)
                <strike class="text-danger"><i class="fas fa-rupee-sign"></i> {{$tv->mrp}}
                </strike>@endif</div></h6></p>
                    
              
            </a></center>
            
            
        </div>
        @endforeach
    </div>
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

@endsection