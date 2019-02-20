<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

use Mail;
use App\mail\getbargaineer;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  //  protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
        public function __construct()
{
    $this->middleware('guest');
    Session::put('backUrl', URL::previous());
}


public function redirectTo()
{
    Mail::send(new getbargaineer());
    return Session::get('backUrl') ? Session::get('backUrl') :   $this->redirectTo;
}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'mobile'=>'required|numeric|digits_between:1,10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],            
            'password' => bcrypt($data['password']),
        ]);

    //     $to_name = 'suhail amir';
    //     $to_email = 'suhailamir891@gmail.com';
    // $data = array('name'=>"Sam Jose", "body" => "Test mail");
    
    // Mail::send('user.mail', $data, function($message) use ($to_name, $to_email) {
    // $message->to($to_email, $to_name)
    //         ->subject('testing purpose');
    // $message->from('support@getbargaineer.com','Mohd Suhail');
    // });
    }
}
