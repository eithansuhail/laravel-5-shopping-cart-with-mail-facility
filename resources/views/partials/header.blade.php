<div class="w3-row w3-white w3-center sticky-top">
  <a href="/category/tvs"class="w3-col w3-container s3 m3  l3">TVs</a>
    <a href="/category/mobiles"class="w3-col w3-container s3 m3  l3">Mobiles</a>
   <a href="/category/mobiles"class="w3-col w3-container s3 m3  l3">Mobiles</a> 
   <a href="/category/mobiles"class="w3-col w3-container s3 m3  l3">Mobiles</a>
</div>
</nav>


<!-- <---------------------------------------------------------------------------------->
<nav class="navbar navbastatic-top navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    
      <a class="navbar-brand" href="/"><strong> getbargaineer</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-left" method="POST" action="{{route('product.search')}}">
        {{csrf_field()}}
      <div class="form-group" ><table><tr >
        <td style="width: 70%;">
          <input type="text" style="width: 250px;" class="form-control"  placeholder="Search By Product Name" name="name" required autofocus pattern="[A-Za-z ]+"></td>
        <td>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></td></tr></table>
        </div>
        
      </form>
      <ul class="nav navbar-nav navbar-right">

       
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else



 <?php
          $userid = Auth::user()->id;
          $co = DB::table('cartproducts')->where('user_id',$userid);
          $count = $co->count();
                 ?>
                        <li><a href="/shopping-cart"><i class="fas fa-cart-arrow-down"></i>Cart
                            @if($count>0) <span class="badge">
                              {{$count}} 
                             
                            </span> @endif</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li > <a href="/userprofile"> User Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>