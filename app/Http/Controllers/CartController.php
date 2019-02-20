<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\CartProduct;
use App\Order;
use App\order_user;
use App\order_product;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;


use App\order_products;
use App\order_users;
class CartController extends Controller
{

    public function getaddtocart(){

       

try {
        $cart = new Cartproduct();
        $cart->product_id= request('product_id');
        $cart->user_id= request('user_id');
        $cart->save();
    } 
    catch(\Exception $e){
                return redirect()->back()->with('alert', 'Item is already added on cart');
    }
    	 return redirect()->back();
    }

    public function destroy($id){
         $product = Cartproduct::find($id)->delete(); 
         $userid = auth()->user()->id;
         $showData = DB::table('cartproducts')
         ->where('user_id',$userid);
         $count = $showData->count();
         if($count>0){
            return view('projects.cart',['showData'=>$showData]);}
        else{
        return redirect('/')->with('alert', 'Please shop, your Cart is empty');
    }
        
           
            return redirect('/shopping-cart');
    }
    public function update($id){
            $cart = Cartproduct::find($id);
            $cart->quantity= request('quantity');
            $cart->save();
            return redirect('/shopping-cart');
    }

    public function getcart(){
         $id = auth()->user()->id;
    	$showData = DB::table('cartproducts')
        ->where('user_id',$id)
        ->join('products as p', 'cartproducts.product_id', '=', 'p.id')
        
        ->select('p.id as pid','p.imageurl as imageurl','p.productname as pname' , 'cartproducts.quantity as quantity','p.price as price','cartproducts.id as cart_id') //<- add your other selects
        ->get();
        $count = $showData->count();
        if(!$count>0){return redirect()->back()->with('alert', 'Cart is empty');}
        else{
    	return view('projects.cart',['showData'=>$showData]);
    }
    }
    public function getcheckout(){
        $id = auth()->user()->id;
        
        $showData = DB::table('cartproducts')
        ->where('user_id',$id)
        ->join('products as p', 'cartproducts.product_id', '=', 'p.id')
        
        ->select( 'cartproducts.quantity as quantity','p.price as price') //<- add your other selects
        ->get();
        
        $count = $showData->count();
        if($count>0){
        	return view('projects.checkout',['showData'=>$showData]);}
        else{
        return redirect()->back()->with('alert', 'Cart is empty');
    }
    }
    public function postcheckout(Request $request){
     $id = auth()->user()->id;
        
        $showData = DB::table('cartproducts')
        ->where('user_id',$id)
        ->join('products as p', 'cartproducts.product_id', '=', 'p.id')
        
        ->select( 'cartproducts.quantity as quantity','p.price as price') //<- add your other selects
        ->get();
         $count = $showData->count();

    
         if($count>0){
            $total=0;
            foreach ($showData as $u) {
                $total+= $u->price *  $u ->quantity;
            }

              
     try{
                
        \Stripe\Stripe::setApiKey("paste your secret here");

 $customer = \Stripe\Customer::create([
  "email" => "paying.user@example.com",
  "source" => $request->input('stripeToken'),
]);

$charge = \Stripe\Charge::create([
    'amount' => $total*100,
    'currency' => 'inr',
     'source' => 'tok_visa',
    //'customer'=>$customer,//this option will be available after getting paid account or real active card
    'receipt_email' => 'jenny.rosen@example.com',
]);
                $order = new order_user();
                $order->user_id =$id;
                $order->address = $request->input('address');
                $order->payment_id= $charge->id;
                $order->save();

                $order_id = DB::table('order_users')
                            ->where('user_id',$id)
                            ->orderBy('created_at', 'desc')
                            ->take(1)
                            ->get();

                 foreach ($order_id as $oid) {
                        $orid =  $oid->id;

                        }
            
                            
                $cart = DB::table('cartproducts')
                        ->where('user_id',$id)
                        ->select('product_id','quantity')
                        ->get();

                        foreach ($cart as $c ) {
                            $order1 = new order_product();
                            $order1->order_id =$orid;
                            $order1->product_id = $c->product_id;
                            $order1->quantity= $c->quantity;
                            $order1->save();
                        }
            }
            catch(\Exception $e){
                return redirect('/checkout')->with('error',$e->getMessage());
            }



            $showData = DB::table('cartproducts')
            ->where('user_id',$id)->delete();

            return redirect('/')->with('success','Successfully purchased product');
        }
        else{
        return redirect()->back()->with('alert', 'Cart is empty');
    }

    }

    public function getprofile(){
        $id = auth()->user()->id;
        $orders = DB::table('order_users')
        ->where('user_id',$id)  
        ->get();
        $order_products = DB::table('order_products')
        ->join('products as p', 'order_products.product_id', '=', 'p.id')
        
        ->select('p.id as pid','p.imageurl as imageurl',
        'p.productname as productname' ,
        'p.description_1 as description_1',
        'p.description_2 as description_2' ,
        'order_products.quantity as quantity',
        'p.price as price','p.mrp as mrp',
        'order_products.order_id as orderid') //<- add your other selects
        ->get();
         return view('user.userprofile',['orders'=>$orders,'order_products'=>$order_products]);

    }

    
}
