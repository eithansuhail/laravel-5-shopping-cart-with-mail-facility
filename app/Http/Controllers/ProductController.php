<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\DB;
use Mail;
use App\mail\sendMail;

class ProductController extends Controller
{
    public function getindex(){
       
    	 $products = DB::table('products')
         ->where('category','mobiles')
         ->orderBy('created_at', 'DESC')
         ->take(6)->get();
         $tvs = DB::table('products')
         ->where('category','tvs')
         ->orderBy('created_at', 'DESC')
         ->take(6)->get();
    	 return view('welcome',['products'=>$products,'tvs'=>$tvs]);
    }
    
    public function show($id)
    {

         $product = Product::find($id);  
         return view('projects.show',compact('product'));
    }
    public function getsearch(Request $request){

    	$name = $request->input('name');
    	$products = Product::where('productname','LIKE',"%$name%")->get(); 
         return view('projects.search',compact('products'));

    }

    public function sendmail(){
        return view('user.mail');
  
    }
    public function postmail(Request $request){
    //     $to_name= auth()->user()->name;
    //     $to_email = auth()->user()->email;
    //     $subject = $request->input('subject');
    //     $body = $request->input('body');
    // $data = array('name'=>"Dear", "body" => 'fsdfksklmk');
    
    // Mail::send('user.mail', $data, function($message) use ($to_name, $to_email) {
    // $message->to($to_email, $to_name)
    //         ->subject('gfdkgdfglkdflg');
    // $message->from('support@getbargaineer.com','Mohd Suhail');
    // });
    // return redirect()->back()->with('alert','Message has been send');
        Mail::send(new sendmail());
        return view('user.mail');
    }

    public function getcategory($name){
        //$category = $request->input('category');
        $products = DB::table('products')
         ->where('category',$name)
         ->get();
         
         return view('projects.categoryshow',['products'=>$products]);
    }
    
 
}